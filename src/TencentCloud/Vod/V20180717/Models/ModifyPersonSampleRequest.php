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
 * ModifyPersonSample request structure.
 *
 * @method string getPersonId() Obtain 
 * @method void setPersonId(string $PersonId) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method array getUsages() Obtain 
 * @method void setUsages(array $Usages) Set 
 * @method AiSampleFaceOperation getFaceOperationInfo() Obtain 
 * @method void setFaceOperationInfo(AiSampleFaceOperation $FaceOperationInfo) Set 
 * @method AiSampleTagOperation getTagOperationInfo() Obtain 
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set 
 */
class ModifyPersonSampleRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $PersonId;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var array 
     */
    public $Usages;

    /**
     * @var AiSampleFaceOperation 
     */
    public $FaceOperationInfo;

    /**
     * @var AiSampleTagOperation 
     */
    public $TagOperationInfo;

    /**
     * @param string $PersonId 
     * @param integer $SubAppId 
     * @param string $Name 
     * @param string $Description 
     * @param array $Usages 
     * @param AiSampleFaceOperation $FaceOperationInfo 
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("FaceOperationInfo",$param) and $param["FaceOperationInfo"] !== null) {
            $this->FaceOperationInfo = new AiSampleFaceOperation();
            $this->FaceOperationInfo->deserialize($param["FaceOperationInfo"]);
        }

        if (array_key_exists("TagOperationInfo",$param) and $param["TagOperationInfo"] !== null) {
            $this->TagOperationInfo = new AiSampleTagOperation();
            $this->TagOperationInfo->deserialize($param["TagOperationInfo"]);
        }
    }
}
