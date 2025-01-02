import React from 'react'
import { Link } from "next/link";

export default function NavBar() {
  return (
    <div className='w-[100vw] h-[60px] bg-[#edede9] flex justify-center items-center'>
      <Link href="/" className="ml-2 mr-4 text-[#ffffff] hover:text-[#bbaeae] ">Acceuil </Link>
    </div>
  )
}
