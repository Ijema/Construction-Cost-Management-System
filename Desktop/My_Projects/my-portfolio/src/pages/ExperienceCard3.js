import React from 'react'
import { motion } from 'framer-motion'

function ExperienceCard3() {
  return (
    <article className="flex flex-col rounded-lg items-center space-y-2 
    flex-shrink-0 w-[230px] md:w-[390px] xl:w-[405px] snap-center
    bg-[#334155] py-3 px-2  overflow-scroll-x">
        <motion.img 
            initial={{ 
                y: -100,
                opacity:0,
            }}
            transition={{ duration: 1.2 }}
            whileInView={{ opacity:1, y:0 }}
            viewport={{ once:true }}
            className="w-[90px] h-[90px] rounded-full md:w-[110px] md:h-[110px] lg:w-[110px] lg:h-[110px] object-cover object-center"
            src="./assets/toro-logo.jpg" alt="Company Logo"
        />

        <div className="">
            <h4 className="text-2xl font-light">Computer Science Tutor</h4>
            <p className="font-bold text-1xl mt-1">Government Secondary School, Toro</p>
            
            <p className="uppercase pb-5 text-gray-300 text-sm">April 2015 - April 2016</p>
            <ul 
            className="list-disc space-y-1 ml-5 text-sm">
                <li>Provide training to pupils on the Microsoft Office suite and other pertinent technologies.</li>
                <li>Teach students how to write computer programs and algorithms</li>
                <li>Create projects that will improve lectures.</li>
            </ul>
        </div>
    </article>
  );
}

export default ExperienceCard3