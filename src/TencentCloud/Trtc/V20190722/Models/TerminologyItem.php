<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transcription companion terminology table entry
 *
 * @method string getTargetLang() Obtain <p>Target language.</p>
 * @method void setTargetLang(string $TargetLang) Set <p>Target language.</p>
 * @method array getTerminology() Obtain <p>Terminology configuration.</p>
 * @method void setTerminology(array $Terminology) Set <p>Terminology configuration.</p>
 */
class TerminologyItem extends AbstractModel
{
    /**
     * @var string <p>Target language.</p>
     */
    public $TargetLang;

    /**
     * @var array <p>Terminology configuration.</p>
     */
    public $Terminology;

    /**
     * @param string $TargetLang <p>Target language.</p>
     * @param array $Terminology <p>Terminology configuration.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TargetLang",$param) and $param["TargetLang"] !== null) {
            $this->TargetLang = $param["TargetLang"];
        }

        if (array_key_exists("Terminology",$param) and $param["Terminology"] !== null) {
            $this->Terminology = [];
            foreach ($param["Terminology"] as $key => $value){
                $obj = new TermPair();
                $obj->deserialize($value);
                array_push($this->Terminology, $obj);
            }
        }
    }
}
