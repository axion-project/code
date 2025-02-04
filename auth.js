// pages/api/auth.js
import { Clerk } from '@clerk/clerk-sdk-node';

export default function handler(req, res) {
  if (req.method === 'POST') {
    const { email, password } = req.body;
    Clerk.users.createUser({ emailAddress: email, password })
      .then(user => res.status(201).json(user))
      .catch(err => res.status(400).json({ error: err.message }));
  }
}