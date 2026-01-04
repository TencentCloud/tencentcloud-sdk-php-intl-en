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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 3D file.
 *
 * @method string getUrl() Obtain Specifies the file Url with a valid period of 24 hours.	
 * @method void setUrl(string $Url) Set Specifies the file Url with a valid period of 24 hours.	
 * @method string getType() Obtain Specifies the file format.	
 * @method void setType(string $Type) Set Specifies the file format.	
 */
class InputFile3D extends AbstractModel
{
    /**
     * @var string Specifies the file Url with a valid period of 24 hours.	
     */
    public $Url;

    /**
     * @var string Specifies the file format.	
     */
    public $Type;

    /**
     * @param string $Url Specifies the file Url with a valid period of 24 hours.	
     * @param string $Type Specifies the file format.	
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
