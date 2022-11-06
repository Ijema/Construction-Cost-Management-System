import React from 'react';
import { motion } from 'framer-motion';
import Project1 from './Project1';
import Project2 from './Project2';
import Project3 from './Project3';
import Project4 from './Project4';

function Projects() {

    return (
        <motion.div
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 1.5 }}
            
            className="h-screen relative flex overflow-hidden flex-col text-left md:flex-row max-w-full 
            justify-evenly mx-auto items-center z-0"
        >
            
            <h3 className="absolute top-10 uppercase tracking-[9px] text-gray-100 text-2xl">
                Projects
            </h3>
                
            <div className="relative top-[40px] w-full flex space-x-5 p-10 overflow-x-scroll overflow-y-hidden snap-x snap-mandatory scrollbar scrollbar-thin scrollbar-track-gray-400/20 scrollbar-thumb-[#ffffff] z-20">
                <Project1 />
                <Project2 />
                <Project3 />
                <Project4 />
            </div>

            <div className="w-full absolute top-[35%] h-[60%] bg-[#F7ABBA]/10 left-0 h-[500px]
            -skew-y-12">
            </div>
   </motion.div>     
  )
}

export default Projects