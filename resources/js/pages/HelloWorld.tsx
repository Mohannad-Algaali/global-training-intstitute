import React from 'react';

interface HelloWorldProps {
  message: string;
}

const HelloWorld: React.FC<HelloWorldProps> = ({ message }) => {
  return (
    <div style={{ padding: '2rem' }}>
      <h1>Hello World</h1>
      <p>{message}</p>
    </div>
  );
};

export default HelloWorld;
