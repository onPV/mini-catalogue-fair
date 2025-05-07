type Step = {
    id: number;
    stepOrder: number;
    description: string;
    duration?: number;
  };
  
  export default async function StepList({ protocolId }: { protocolId: number }) {
    const res = await fetch(
      `${process.env.NEXT_PUBLIC_API_BASE_URL}/steps?protocol=/api/protocols/${protocolId}`,
      { cache: "no-store" }
    );
  
    const data = await res.json();
    const steps: Step[] = data["hydra:member"];
  
    if (!steps.length) return null;
  
    return (
      <ul className="ml-4 mt-2 text-sm text-gray-700">
        {steps
          .sort((a, b) => a.stepOrder - b.stepOrder)
          .map((step) => (
            <li key={step.id}>
              <strong>Étape {step.stepOrder} :</strong> {step.description}
              {step.duration && <> ({step.duration} min)</>}
            </li>
          ))}
      </ul>
    );
  }  