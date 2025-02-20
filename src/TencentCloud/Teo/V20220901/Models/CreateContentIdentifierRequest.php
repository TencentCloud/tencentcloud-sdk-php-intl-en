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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateContentIdentifier request structure.
 *
 * @method string getDescription() Obtain Description of the content identifier, length limit of up to 20 characters.
 * @method void setDescription(string $Description) Set Description of the content identifier, length limit of up to 20 characters.
 * @method string getPlanId() Obtain Target plan id to be bound, available only for the enterprise edition. <li>if there is already a plan under your account, go to [plan management](https://console.cloud.tencent.com/edgeone/package) to get the plan id and directly bind the content identifier to the plan;</li><li>if you do not have a plan to bind, please purchase an enterprise edition plan first.</li>.
 * @method void setPlanId(string $PlanId) Set Target plan id to be bound, available only for the enterprise edition. <li>if there is already a plan under your account, go to [plan management](https://console.cloud.tencent.com/edgeone/package) to get the plan id and directly bind the content identifier to the plan;</li><li>if you do not have a plan to bind, please purchase an enterprise edition plan first.</li>.
 * @method array getTags() Obtain Tags of the content identifier. this parameter is used for authority control. to create tags, go to the [tag console](https://console.cloud.tencent.com/tag/taglist).
 * @method void setTags(array $Tags) Set Tags of the content identifier. this parameter is used for authority control. to create tags, go to the [tag console](https://console.cloud.tencent.com/tag/taglist).
 */
class CreateContentIdentifierRequest extends AbstractModel
{
    /**
     * @var string Description of the content identifier, length limit of up to 20 characters.
     */
    public $Description;

    /**
     * @var string Target plan id to be bound, available only for the enterprise edition. <li>if there is already a plan under your account, go to [plan management](https://console.cloud.tencent.com/edgeone/package) to get the plan id and directly bind the content identifier to the plan;</li><li>if you do not have a plan to bind, please purchase an enterprise edition plan first.</li>.
     */
    public $PlanId;

    /**
     * @var array Tags of the content identifier. this parameter is used for authority control. to create tags, go to the [tag console](https://console.cloud.tencent.com/tag/taglist).
     */
    public $Tags;

    /**
     * @param string $Description Description of the content identifier, length limit of up to 20 characters.
     * @param string $PlanId Target plan id to be bound, available only for the enterprise edition. <li>if there is already a plan under your account, go to [plan management](https://console.cloud.tencent.com/edgeone/package) to get the plan id and directly bind the content identifier to the plan;</li><li>if you do not have a plan to bind, please purchase an enterprise edition plan first.</li>.
     * @param array $Tags Tags of the content identifier. this parameter is used for authority control. to create tags, go to the [tag console](https://console.cloud.tencent.com/tag/taglist).
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
