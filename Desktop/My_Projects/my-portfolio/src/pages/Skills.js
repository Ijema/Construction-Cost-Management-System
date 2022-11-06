// import React, { useEffect, useState } from 'react'
import { motion } from 'framer-motion'
import Skill1 from '../pages/Skill1'
import Skill2 from '../pages/Skill2'
import Skill3 from '../pages/Skill3'
import Skill4 from '../pages/Skill4'
import Skill5 from '../pages/Skill5'
import Skill6 from '../pages/Skill6'
import Skill7 from '../pages/Skill7'
import Skill8 from '../pages/Skill8'
import Skill9 from '../pages/Skill9'
import Skill10 from '../pages/Skill10'

function Skills() {
  
  return (
    <motion.div
        initial={{ opacity: 0 }}
        whileInView={{ opacity: 1 }}
        transition={{ duration: 1.5 }}
        className ="h-screen flex relative flex-col text-center md:text-left xl:flex-row max-w-[2000px] xl:px-10 min-h-screen justify-center xl:space-y-0 mx-auto items-center">
    <h3 className="absolute top-[60px] uppercase tracking-[9px] text-gray-100 text-2xl">
           Skills
    </h3>
        <h3 className="absolute top-[120px] uppercase tracking-[3px] text-gray-300 text-sm md:text-lg">
            Hover over a skill to see the skill proficiency
        </h3>

        <div className="grid grid-cols-3 xl:grid-cols-4 gap-5">
          <Skill1 />
          <Skill2 />
          <Skill3 />
          <Skill4 />
          <Skill5 />
          <Skill6 />
          <Skill7 />
          <Skill8 />
          <Skill9 />
          <Skill10 />

            
        </div>
    </motion.div>
  );
}

export default Skills