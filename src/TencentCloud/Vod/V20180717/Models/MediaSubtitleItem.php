<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getId() Obtain 
 * @method void setId(string $Id) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getLanguage() Obtain 
 * @method void setLanguage(string $Language) Set 
 * @method string getFormat() Obtain 
 * @method void setFormat(string $Format) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 */
class MediaSubtitleItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Id;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Language;

    /**
     * @var string 
     */
    public $Format;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @param string $Id 
     * @param string $Name 
     * @param string $Language 
     * @param string $Format 
     * @param string $Url 
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
