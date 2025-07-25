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
 * @method string getPersonId() Obtain ID of a sample.
 * @method void setPersonId(string $PersonId) Set ID of a sample.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getName() Obtain Name. Length limit: 128 characters.
 * @method void setName(string $Name) Set Name. Length limit: 128 characters.
 * @method string getDescription() Obtain Description. Length limit: 1,024 characters.
 * @method void setDescription(string $Description) Set Description. Length limit: 1,024 characters.
 * @method array getUsages() Obtain Sample usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: used for content recognition and inappropriate information recognition; equivalent to 1+2
 * @method void setUsages(array $Usages) Set Sample usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: used for content recognition and inappropriate information recognition; equivalent to 1+2
 * @method AiSampleFaceOperation getFaceOperationInfo() Obtain Information of operations on facial features.
 * @method void setFaceOperationInfo(AiSampleFaceOperation $FaceOperationInfo) Set Information of operations on facial features.
 * @method AiSampleTagOperation getTagOperationInfo() Obtain Tag operation information.
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set Tag operation information.
 */
class ModifyPersonSampleRequest extends AbstractModel
{
    /**
     * @var string ID of a sample.
     */
    public $PersonId;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Name. Length limit: 128 characters.
     */
    public $Name;

    /**
     * @var string Description. Length limit: 1,024 characters.
     */
    public $Description;

    /**
     * @var array Sample usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: used for content recognition and inappropriate information recognition; equivalent to 1+2
     */
    public $Usages;

    /**
     * @var AiSampleFaceOperation Information of operations on facial features.
     */
    public $FaceOperationInfo;

    /**
     * @var AiSampleTagOperation Tag operation information.
     */
    public $TagOperationInfo;

    /**
     * @param string $PersonId ID of a sample.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $Name Name. Length limit: 128 characters.
     * @param string $Description Description. Length limit: 1,024 characters.
     * @param array $Usages Sample usage. Valid values:
1. Recognition: used for content recognition; equivalent to `Recognition.Face`
2. Review: used for inappropriate information recognition; equivalent to `Review.Face`
3. All: used for content recognition and inappropriate information recognition; equivalent to 1+2
     * @param AiSampleFaceOperation $FaceOperationInfo Information of operations on facial features.
     * @param AiSampleTagOperation $TagOperationInfo Tag operation information.
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
