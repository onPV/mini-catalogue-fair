// frontend/app/components/ProtocolCard.tsx

type Protocol = {
    id: number;
    title: string;
    objective: string;
    createdAt: string;
  };
  
  export default function ProtocolCard({ protocol }: { protocol: Protocol }) {
    return (
      <li className="border rounded p-4 shadow mb-2">
        <h2 className="font-bold text-lg">{protocol.title}</h2>
        <p className="text-sm text-gray-600">{protocol.objective}</p>
        <p className="text-xs text-gray-400">
          Créé le : {new Date(protocol.createdAt).toLocaleDateString()}
        </p>
      </li>
    );
  }  