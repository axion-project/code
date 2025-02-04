// database.js
import sqlite3 from 'sqlite3';
import { open } from 'sqlite';

export async function initDB() {
  return open({
    filename: './lailaps.db',
    driver: sqlite3.Database
  });
}

export async function createTables() {
  const db = await initDB();
  await db.exec(`
    CREATE TABLE IF NOT EXISTS threats (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      name TEXT NOT NULL,
      description TEXT,
      severity INTEGER
    );
  `);
}