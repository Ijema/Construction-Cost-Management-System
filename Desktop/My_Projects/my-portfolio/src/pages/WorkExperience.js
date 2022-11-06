import React from 'react'
import { motion } from 'framer-motion'
import ExperienceCard1 from './ExperienceCard1'
import ExperienceCard2 from './ExperienceCard2'
import ExperienceCard3 from './ExperienceCard3'

export default function WorkExperience() {
  return (
    <motion.div 
      initial={{ opacity: 0 }}
      whileInView={{ opacity: 1 }}
      transition={{ duration: 1.2 }}
      className="h-screen flex relative flex-col text-left md:flex-row max-w-full px-10 justify-evenly mx-auto items-center">
      
      <h3 className="absolute top-[20px] xl:top-[9px] uppercase tracking-[5px] text-gray-100 text-2xl">
        Work Experience
      </h3>

      <div className="w-full relative flex space-x-5 xl:p-10 overflow-x-scroll snap-x snap-mandatory scrollbar-thin scrollbar-track-gray-400/20 scrollbar-thumb-[#ffffff]">
        <ExperienceCard1 />
        <ExperienceCard2 />
        <ExperienceCard3 />
      </div>
    </motion.div>
  );
} 