// import type { GetStaticProps } from 'next';
import Head from 'next/head';
import { BarsArrowUpIcon } from '@heroicons/react/24/solid'
import Header from './pages/Header.js';
import Hero from './pages/Hero.js';
import About from './pages/About.js';
import WorkExperience from './pages/WorkExperience.js';
import Skills from './pages/Skills.js'
import Projects from './pages/Projects.js'
import ContactMe from './pages/ContactMe.js';
import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="bg-slate-800 h-screen text-white overflow-y-scroll
     overflow-x-hidden snap-y snap-mandatory z-0
    scrollbar-track-gray-400/20 scrollbar-thumb-[#ffffff] scrollbar-thin">
      <Head>
        <title>Ijeoma's Portfolio</title>
      </Head>

      <section id="hero" className="snap-start">
        <Header />
        <Hero />
      </section>

      <section id="about" className="snap-center">
        <About />
      </section>

      <section id="workExperience" className="snap-center">
        <WorkExperience />
      </section>

      <section id="skills" className="snap-start">
        <Skills />
      </section>

      <section id="projects" className="snap-start">
        <Projects />
      </section>

      <section id = "contact" className="snap-start">
        <ContactMe />
      </section>

      <footer className="sticky bottom-[55px] w-full cursor-pointer">
          <div className="flex items-left justify-left pl-3">
          <a href="#hero">
             <BarsArrowUpIcon className="h-6 w-6 rounded-full filter grayscale hover:grayscale-0 cursor-pointer" />
          </a>
        </div>
      </footer>

    </div>
  );
};


export default App;
