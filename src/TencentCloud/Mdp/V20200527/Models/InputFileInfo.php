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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VOD remux task input file information.
 *
 * @method string getType() Obtain Input file Type. The input types include COS and URL.
 * @method void setType(string $Type) Set Input file Type. The input types include COS and URL.
 * @method CosInputInfo getCosInputInfo() Obtain cos input informations. 
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) Set cos input informations. 
 * @method string getUrl() Obtain input file url.
 * @method void setUrl(string $Url) Set input file url.
 */
class InputFileInfo extends AbstractModel
{
    /**
     * @var string Input file Type. The input types include COS and URL.
     */
    public $Type;

    /**
     * @var CosInputInfo cos input informations. 
     */
    public $CosInputInfo;

    /**
     * @var string input file url.
     */
    public $Url;

    /**
     * @param string $Type Input file Type. The input types include COS and URL.
     * @param CosInputInfo $CosInputInfo cos input informations. 
     * @param string $Url input file url.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
