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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateContentIdentifier request structure.
 *
 * @method string getDescription() Obtain Description of the content identifier. Length limited to 20 characters.
 * @method void setDescription(string $Description) Set Description of the content identifier. Length limited to 20 characters.
 * @method string getPlanId() Obtain Target bundle ID to be bound. Enterprise edition only.<li>If a package already exists under your account, go to [Plan management](https://console.cloud.tencent.com/edgeone/package) to get the package ID, and bind the content identifier to that package directly;</li><li>If you currently have no bindable package, purchase an enterprise edition package first.</li>
 * @method void setPlanId(string $PlanId) Set Target bundle ID to be bound. Enterprise edition only.<li>If a package already exists under your account, go to [Plan management](https://console.cloud.tencent.com/edgeone/package) to get the package ID, and bind the content identifier to that package directly;</li><li>If you currently have no bindable package, purchase an enterprise edition package first.</li>
 * @method array getTags() Obtain Tag. This parameter is used for authority control over content identifiers. Go to the tag console (https://console.cloud.tencent.com/tag/taglist) first to create tags before you can input the corresponding tag key and tag value here.
 * @method void setTags(array $Tags) Set Tag. This parameter is used for authority control over content identifiers. Go to the tag console (https://console.cloud.tencent.com/tag/taglist) first to create tags before you can input the corresponding tag key and tag value here.
 */
class CreateContentIdentifierRequest extends AbstractModel
{
    /**
     * @var string Description of the content identifier. Length limited to 20 characters.
     */
    public $Description;

    /**
     * @var string Target bundle ID to be bound. Enterprise edition only.<li>If a package already exists under your account, go to [Plan management](https://console.cloud.tencent.com/edgeone/package) to get the package ID, and bind the content identifier to that package directly;</li><li>If you currently have no bindable package, purchase an enterprise edition package first.</li>
     */
    public $PlanId;

    /**
     * @var array Tag. This parameter is used for authority control over content identifiers. Go to the tag console (https://console.cloud.tencent.com/tag/taglist) first to create tags before you can input the corresponding tag key and tag value here.
     */
    public $Tags;

    /**
     * @param string $Description Description of the content identifier. Length limited to 20 characters.
     * @param string $PlanId Target bundle ID to be bound. Enterprise edition only.<li>If a package already exists under your account, go to [Plan management](https://console.cloud.tencent.com/edgeone/package) to get the package ID, and bind the content identifier to that package directly;</li><li>If you currently have no bindable package, purchase an enterprise edition package first.</li>
     * @param array $Tags Tag. This parameter is used for authority control over content identifiers. Go to the tag console (https://console.cloud.tencent.com/tag/taglist) first to create tags before you can input the corresponding tag key and tag value here.
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
