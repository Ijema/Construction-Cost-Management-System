import React from 'react'
import { motion } from 'framer-motion'

function ExperienceCard() {
  return (
    <article className="flex flex-col rounded-lg items-center space-y-1 xl:space-y-2 
    flex-shrink-0 w-[230px] md:w-[390px] xl:w-[405px] snap-center
    bg-[#334155] py-3 px-2 overflow-scroll-x">
        <motion.img 
            initial={{ 
                y: -100,
                opacity:0,
            }}
            transition={{ duration: 1.2 }}
            whileInView={{ opacity:1, y:0 }}
            viewport={{ once:true }}
            className="w-[90px] h-[90px] rounded-full md:w-[110px] md:h-[110px] lg:w-[110px] lg:h-[110px] object-cover object-center"
            src="./assets/Nau-logo.png" alt="Company Logo"
        />

        <div className="">
            <h4 className="text-2xl font-light">Front-end Developer</h4>
            <p className="font-bold text-1xl mt-1">Nnamdi Azikiwe University</p>
            <div className="flex space-x-2 my-2">
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/html-logo.jpg" alt ="Tech Used"
                />
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/php.png" alt ="Tech Used"
                />
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/mysql1.png" alt ="Tech Used"
                />
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/javascript-logo.png" alt ="Tech Used"
                />
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/react.png" alt ="Tech Used"
                />
                <img className="w-7 h-7 xl:h-10 xl:w-10 rounded-full"
                src="./assets/sanity.png" alt ="Tech Used"
                />
            </div>
            <p className="uppercase pb-5 text-gray-300 text-sm">June 2019 -Till date</p>
            <ul 
            className="list-disc space-y-1 ml-5 text-sm">
                <li>Create user-friendly web pages languages like HTML for the school</li>
                <li>Review students code</li>
                <li>Design, Test and Implement codes.</li>
                <li>keep the website updated and improved Conduct hands-on practice for students 
                    in languages like HTML, PHP, CSS, Ajax, JavaScript, and MySQL</li>
            </ul>
        </div>
    </article>
  );
}

export default ExperienceCard