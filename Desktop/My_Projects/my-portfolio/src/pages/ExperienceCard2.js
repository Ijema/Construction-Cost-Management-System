import React from 'react'
import { motion } from 'framer-motion'

function ExperienceCard2() {
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
            src="./assets/ijeoma-logo1.jpg" alt="Company Logo"
        />

        <div className="">
            <h4 className="text-2xl font-light">Web Developer</h4>
            <p className="font-bold text-1xl mt-1">Freelancer</p>
            <div className="flex space-x-2 my-2">
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/html-logo.jpg" alt ="Tech Used"
                />
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/css-logo.png" alt ="Tech Used"
                />
                
                </div>
            <p className="uppercase pb-5 text-gray-300 text-sm">January 2017 - April 2019</p>
            <ul 
            className="list-disc space-y-1 ml-5 text-sm">
                <li>Use web development best practices, to write well-designed, tested, efficient code.</li>
                <li>Work with stakeholders to collect and improve requirements based on technical needs.</li>
                <li>Responsible for site's upkeep, growth, and scaling.</li>

            </ul>
        </div>
    </article>
  );
}

export default ExperienceCard2