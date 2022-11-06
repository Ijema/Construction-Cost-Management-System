import React from 'react'
import { PhoneIcon, MapPinIcon, EnvelopeIcon } from '@heroicons/react/24/solid'
import { useForm, SubmitHandler } from 'react-hook-form'

type Inputs = {
  name: string,
  email: string,
  subject: string,
  message: string,
};

function ContactMe() {
  const { register, handleSubmit, watch, formState: { errors } } = useForm()
   
  const onSubmit: SubmitHandler<Inputs> = (formData) => {
    window.location.href = `mailto:ojukwuijeomaamara@gmail.com?subject=${formData.subject}&body=Hi, my name is ${formData.name}. ${formData.message}.${formData.email}`
  };
  
  return (
    <div className =" h-screen flex relative flex-col text-center md:text-left xl:flex-row max-w-[2000px] xl:px-10 min-h-screen justify-center xl:space-y-0 mx-auto items-center">
      <h3 className="absolute top-10 xl:top-15 uppercase tracking-[9px] text-gray-100 text-2xl">
        Contact
      </h3>

      <div className="">
        <h4 className="text-1xl md:text-3xl xl:text-3xl font-semibold text-center pb-3 xl:pt-[60px]">
          I have what you need {" "}.
          <span className="decoration-[gray]/50 underline">Lets Talk.</span>
        </h4>

        <div className="space-y-1">
          <div className="flex items-center space-x-3 justify-center">
            <PhoneIcon className="text-[#94a3b8] h-7 w-7 animate-pulse" />
            <p className="text-1xl md:text-2xl xl:text-2xl">+2348060646993</p>
          </div>

          {/* <div className="flex items-center space-x-3 justify-center">
            <EnvelopeIcon className="text-[#94a3b8] h-7 w-7 animate-pulse" />
            <p className="text-2xl">+2348060646993</p>
          </div> */}

          <div className="flex items-center space-x-1 xl:space-x-3 justify-center pb-7">
            <MapPinIcon className="text-[#94a3b8] h-7 w-7 animate-pulse" />
            <p className="text-1xl md:text-2xl xl:text-2xl">Oby Okoli street, Awka, Anambra state, Nigeria</p>
          </div>

        </div>

        <form onSubmit={handleSubmit(onSubmit)} className="flex flex-col space-y-2 w-[347px] md:w-full xl:w-full">
          <div className="flex flex-col md:flex-row md:space-x-2 xl:flex-row space-y-2 md:space-y-0 xl:space-y-0">
            <input {...register('name')} placeholder="Name" className="contactInput" type="text"/>
            <input {...register('email')} placeholder="Email" className="contactInput" type="email" />
          </div>

          <input {...register('subject')} placeholder="Subject" className="contactInput" type="text" />

          <textarea {...register('message')} placeholder="Message" className="contactInput h-[100px]"/>
          <button type="submit" className="bg-[#94a3b8] py-2 rounded-sm text-black font-bold text-2xl">Submit</button>
        </form>

      </div>
    </div>
  )
}

export default ContactMe