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
 * ModifyPersonSample request structure.
 *
 * @method string getPersonId() Obtain Figure ID.
 * @method void setPersonId(string $PersonId) Set Figure ID.
 * @method string getName() Obtain Name. Length limit: 128 characters.
 * @method void setName(string $Name) Set Name. Length limit: 128 characters.
 * @method string getDescription() Obtain Description. Length limit: 1,024 characters.
 * @method void setDescription(string $Description) Set Description. Length limit: 1,024 characters.
 * @method array getUsages() Obtain Figure use case. Valid values:
1. Recognition: it is used for content recognition and equivalent to `Recognition.Face`.
2. Review: it is used for content audit and equivalent to `Review.Face`.
3. All: it is used for content recognition and content audit and equivalent to 1+2 above.
 * @method void setUsages(array $Usages) Set Figure use case. Valid values:
1. Recognition: it is used for content recognition and equivalent to `Recognition.Face`.
2. Review: it is used for content audit and equivalent to `Review.Face`.
3. All: it is used for content recognition and content audit and equivalent to 1+2 above.
 * @method AiSampleFaceOperation getFaceOperationInfo() Obtain Face operation information.
 * @method void setFaceOperationInfo(AiSampleFaceOperation $FaceOperationInfo) Set Face operation information.
 * @method AiSampleTagOperation getTagOperationInfo() Obtain Tag operation information.
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set Tag operation information.
 * @method integer getSubAppId() Obtain [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */
class ModifyPersonSampleRequest extends AbstractModel
{
    /**
     * @var string Figure ID.
     */
    public $PersonId;

    /**
     * @var string Name. Length limit: 128 characters.
     */
    public $Name;

    /**
     * @var string Description. Length limit: 1,024 characters.
     */
    public $Description;

    /**
     * @var array Figure use case. Valid values:
1. Recognition: it is used for content recognition and equivalent to `Recognition.Face`.
2. Review: it is used for content audit and equivalent to `Review.Face`.
3. All: it is used for content recognition and content audit and equivalent to 1+2 above.
     */
    public $Usages;

    /**
     * @var AiSampleFaceOperation Face operation information.
     */
    public $FaceOperationInfo;

    /**
     * @var AiSampleTagOperation Tag operation information.
     */
    public $TagOperationInfo;

    /**
     * @var integer [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $PersonId Figure ID.
     * @param string $Name Name. Length limit: 128 characters.
     * @param string $Description Description. Length limit: 1,024 characters.
     * @param array $Usages Figure use case. Valid values:
1. Recognition: it is used for content recognition and equivalent to `Recognition.Face`.
2. Review: it is used for content audit and equivalent to `Review.Face`.
3. All: it is used for content recognition and content audit and equivalent to 1+2 above.
     * @param AiSampleFaceOperation $FaceOperationInfo Face operation information.
     * @param AiSampleTagOperation $TagOperationInfo Tag operation information.
     * @param integer $SubAppId [Subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
