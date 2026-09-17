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
 * @method string getInputUrl() Obtain 
 * @method void setInputUrl(string $InputUrl) Set 
 * @method string getInputFileId() Obtain 
 * @method void setInputFileId(string $InputFileId) Set 
 * @method string getSrcLanguage() Obtain 
 * @method void setSrcLanguage(string $SrcLanguage) Set 
 * @method string getDstLanguage() Obtain 
 * @method void setDstLanguage(string $DstLanguage) Set 
 * @method string getModel() Obtain 
 * @method void setModel(string $Model) Set 
 */
class VideoDubbingAsyncInput extends AbstractModel
{
    /**
     * @var string 
     */
    public $InputUrl;

    /**
     * @var string 
     */
    public $InputFileId;

    /**
     * @var string 
     */
    public $SrcLanguage;

    /**
     * @var string 
     */
    public $DstLanguage;

    /**
     * @var string 
     */
    public $Model;

    /**
     * @param string $InputUrl 
     * @param string $InputFileId 
     * @param string $SrcLanguage 
     * @param string $DstLanguage 
     * @param string $Model 
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
        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("InputFileId",$param) and $param["InputFileId"] !== null) {
            $this->InputFileId = $param["InputFileId"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("DstLanguage",$param) and $param["DstLanguage"] !== null) {
            $this->DstLanguage = $param["DstLanguage"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
