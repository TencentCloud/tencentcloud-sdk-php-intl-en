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
 * CreatePersonSample request structure.
 *
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method array getUsages() Obtain 
 * @method void setUsages(array $Usages) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method array getFaceContents() Obtain 
 * @method void setFaceContents(array $FaceContents) Set 
 * @method array getTags() Obtain 
 * @method void setTags(array $Tags) Set 
 */
class CreatePersonSampleRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Name;

    /**
     * @var array 
     */
    public $Usages;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var array 
     */
    public $FaceContents;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @param string $Name 
     * @param array $Usages 
     * @param integer $SubAppId 
     * @param string $Description 
     * @param array $FaceContents 
     * @param array $Tags 
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FaceContents",$param) and $param["FaceContents"] !== null) {
            $this->FaceContents = $param["FaceContents"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
