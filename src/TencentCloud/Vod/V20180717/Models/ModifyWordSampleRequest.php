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
 * ModifyWordSample request structure.
 *
 * @method string getKeyword() Obtain 
 * @method void setKeyword(string $Keyword) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method array getUsages() Obtain 
 * @method void setUsages(array $Usages) Set 
 * @method AiSampleTagOperation getTagOperationInfo() Obtain 
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set 
 */
class ModifyWordSampleRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Keyword;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var array 
     */
    public $Usages;

    /**
     * @var AiSampleTagOperation 
     */
    public $TagOperationInfo;

    /**
     * @param string $Keyword 
     * @param integer $SubAppId 
     * @param array $Usages 
     * @param AiSampleTagOperation $TagOperationInfo 
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("TagOperationInfo",$param) and $param["TagOperationInfo"] !== null) {
            $this->TagOperationInfo = new AiSampleTagOperation();
            $this->TagOperationInfo->deserialize($param["TagOperationInfo"]);
        }
    }
}
