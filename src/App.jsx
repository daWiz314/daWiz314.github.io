// import { useState } from 'react'
import './App.css'

// function App() {
//   const [count, setCount] = useState(0)

//   return (
//     <>
//       <div>
//         <a href="https://vite.dev" target="_blank">
//           <img src={viteLogo} className="logo" alt="Vite logo" />
//         </a>
//         <a href="https://react.dev" target="_blank">
//           <img src={reactLogo} className="logo react" alt="React logo" />
//         </a>
//       </div>
//       <h1>Vite + React</h1>
//       <div className="card">
//         <button onClick={() => setCount((count) => count + 1)}>
//           count is {count}
//         </button>
//         <p>
//           Edit <code>src/App.jsx</code> and save to test HMR
//         </p>
//       </div>
//       <p className="read-the-docs">
//         Click on the Vite and React logos to learn more
//       </p>
//     </>
//   )
// }

function Header() {
  return (
    <header className='Header'>
      <h3>Harry F. Martin III</h3>
    </header>
  )
}

function NavBar() {
  return (
    <nav className='NavBar BelowHeader'>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../OLD/index.html">Old index</a></li>
      </ul>
    </nav>
  )
}

function MainContent() {
  return (
    <main className='MainContent BelowHeader'>
      <p>This is going to be my website for my new project! The project I am working on is a work that will talk about humanity, and how it seems to continue to abuse different people/things. I will be drawing parallels with humanity and its history with racism, and how it currently uses AI. Topics to include will be abuse, 'affection', and reliance.</p>
      <br/>
      <p>After that I will continue to talk about humanity and its current unregistered use of AI and the affects on the mental state, referencing both previous studies with decreased cognitive function, and what different media outlets are coining as 'ChatGPT Psychosis.'</p>
    </main>
  )
}

function App() {
  return (
    <>
      <Header />
      <NavBar />
      <MainContent />
    </>

  )


}

export default App
