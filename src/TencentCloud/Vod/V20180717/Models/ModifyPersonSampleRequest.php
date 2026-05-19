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
 * @method string getPersonId() Obtain Material ID.
 * @method void setPersonId(string $PersonId) Set Material ID.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getName() Obtain Name. Length limit: 128 characters.
 * @method void setName(string $Name) Set Name. Length limit: 128 characters.
 * @method string getDescription() Obtain Description. Length limit: 1024 characters.
 * @method void setDescription(string $Description) Set Description. Length limit: 1024 characters.
 * @method array getUsages() Obtain Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: Used for inappropriate content recognition, equivalent to Review.Face.
3. All: Used for content recognition and inappropriate content recognition, equivalent to 1+2.
 * @method void setUsages(array $Usages) Set Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: Used for inappropriate content recognition, equivalent to Review.Face.
3. All: Used for content recognition and inappropriate content recognition, equivalent to 1+2.
 * @method AiSampleFaceOperation getFaceOperationInfo() Obtain Facial operation information.
 * @method void setFaceOperationInfo(AiSampleFaceOperation $FaceOperationInfo) Set Facial operation information.
 * @method AiSampleTagOperation getTagOperationInfo() Obtain Tag operation information.
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) Set Tag operation information.
 */
class ModifyPersonSampleRequest extends AbstractModel
{
    /**
     * @var string Material ID.
     */
    public $PersonId;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Name. Length limit: 128 characters.
     */
    public $Name;

    /**
     * @var string Description. Length limit: 1024 characters.
     */
    public $Description;

    /**
     * @var array Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: Used for inappropriate content recognition, equivalent to Review.Face.
3. All: Used for content recognition and inappropriate content recognition, equivalent to 1+2.
     */
    public $Usages;

    /**
     * @var AiSampleFaceOperation Facial operation information.
     */
    public $FaceOperationInfo;

    /**
     * @var AiSampleTagOperation Tag operation information.
     */
    public $TagOperationInfo;

    /**
     * @param string $PersonId Material ID.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $Name Name. Length limit: 128 characters.
     * @param string $Description Description. Length limit: 1024 characters.
     * @param array $Usages Material application scenario. Available values:
1. Recognition: Used for content recognition, equivalent to Recognition.Face.
2. Review: Used for inappropriate content recognition, equivalent to Review.Face.
3. All: Used for content recognition and inappropriate content recognition, equivalent to 1+2.
     * @param AiSampleFaceOperation $FaceOperationInfo Facial operation information.
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
