// components/ThreatGraph.js
import Cytoscape from 'cytoscape';
import { useEffect } from 'react';

export default function ThreatGraph({ data }) {
  useEffect(() => {
    const cy = Cytoscape({
      container: document.getElementById('cy'),
      elements: data,
      style: [{ selector: 'node', style: { label: 'data(label)' } }],
      layout: { name: 'grid' }
    });
  }, [data]);

  return <div id="cy" style={{ width: '100%', height: '500px' }} />;
}