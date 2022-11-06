import React from 'react'
import { motion } from 'framer-motion'

function Project3() {
  return (
    <article className="flex flex-col rounded-lg items-center space-y-2 
    flex-shrink-0 w-[270px] md:w-[360px] lg:w-[350px] xl:w-[405px] snap-center
    bg-[#334155] py-5  overflow-scroll-x">
        <a href="https://gets-password.netlify.app/" target="_blank" rel="noopener referrer">
             <motion.img 
                initial={{ 
                    y: 200,
                    opacity:0,
                }}
                transition={{ duration: 1.2 }}
                whileInView={{ opacity:1, y:0 }}
                viewport={{ once:true }}
                className="w-40 h-20 md:w-60 md:h-40 xl:w-60 xl:h-55"
                src="./assets/password-generator.jpg" alt="Projects"
            />
        </a>

            <div className="space-y-5 px-0 md:px-10 max-w-5xl">
                            <a href= "https://gets-password.netlify.app/" target="_blank" rel="noopener noreferrer">
                                <h4 className="text-3xl font-semibold text-center">
                                    <span className="underline decoration-[gray]">
                                        Password Generator
                                    </span>{" "}
                                </h4>
                            </a>
                            <div className="flex space-x-2 justify-center items-center">
                                <img className="h-8 w-8 xl:w-15 xl:h-15 rounded-full"
                                src="./assets/html-logo.jpg" alt ="Language Used"
                                />
                                <img className="h-8 w-8 rounded-full"
                                src="./assets/css-logo.png" alt ="Language Used"
                                />
                                <img className="h-8 w-8 rounded-full" 
                                src="./assets/javascript-logo.png" alt="Language used"
                                />
                                {/* Tech used */}
                            </div>
                            <p className="text-md text-center md:text-left">
                                This project is designed to generate strong and reliable passwords 
                                with your chosen words and special characters.
                            </p>
                        </div>
    </article>
  );
}

export default Project3