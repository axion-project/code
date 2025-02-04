// pages/index.js
import { useEffect, useState } from 'react';
import ThreatGraph from '../components/ThreatGraph';

export default function Home() {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch('/api/threats')
      .then(res => res.json())
      .then(setData);
  }, []);

  return (
    <div>
      <h1>LAILAPS Project</h1>
      <ThreatGraph data={data} />
    </div>
  );
}