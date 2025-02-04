// pages/api/threats.js
import { initDB } from '../../database';

export default async function handler(req, res) {
  const db = await initDB();
  
  if (req.method === 'GET') {
    const threats = await db.all('SELECT * FROM threats');
    res.status(200).json(threats);
  } else if (req.method === 'POST') {
    const { name, description, severity } = req.body;
    await db.run('INSERT INTO threats (name, description, severity) VALUES (?, ?, ?)', [name, description, severity]);
    res.status(201).json({ message: 'Threat added' });
  }
}