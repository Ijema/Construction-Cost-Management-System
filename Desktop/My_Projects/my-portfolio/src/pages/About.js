import React from 'react'
import { motion } from 'framer-motion'

const About = () => {
  return (
    <motion.div 
      initial={{ opacity:0 }}
      whileInView={{ opacity:1 }}
      transition={{ duration:1.5 }}
      className="h-screen flex flex-col relative text-center md:text-left 
      md:flex-row px-10 justify-evenly mx-auto items-center">
      <h3 className="absolute top-6  md:top-10 xl:top-24 uppercase tracking-[9px] p-30 text-gray-100 text-2xl">
        About
      </h3>
      <motion.img 
        initial={{
          x: -200,
        }}
        transition={{
          duration: 1.2
        }}
        whileInView={{
          opacity: 1,
          x: 0
        }}
        viewport={{
          once: true
        }}
        src="./assets/full-picture.jpg" alt="Full Picture" 
          className="-mb-20 md:mb-0 flex-shrink-0 w-[129px] h-[129px] rounded-full object-cover
          md:rounded-lg md:w-64 md:h-64 lg:w-[300px] lg:h-[300px]"
        />
        <div className="space-y-3 xl-space-y-10 px-0 md:px-10">
          <h4 className="text-2xl xl:text-3xl font-semibold">
            Here is a summary of me
          </h4>
          <p className="text-justify xl:text-base text-1sm px-0">
            I am Ijeoma Amara Ojukwu. A Front-end Developer. My ability to solve problems 
            effectively is strong and I relate and communicate well with people. I have a Master's in Computer Science 
            with a concentration in programming. I desire to be a member of a creative team that is constantly seeking 
            innovative approaches.
          </p>
        </div>
    </motion.div>
  );
}

export default About