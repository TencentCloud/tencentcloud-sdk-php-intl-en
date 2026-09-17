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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getFormat() Obtain 
 * @method void setFormat(string $Format) Set 
 * @method string getDrmType() Obtain 
 * @method void setDrmType(string $DrmType) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 */
class ComplexAdaptiveDynamicStreamingTaskOutput extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $Format;

    /**
     * @var string 
     */
    public $DrmType;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @param integer $Definition 
     * @param string $Format 
     * @param string $DrmType 
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
