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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcesTags request structure.
 *
 * @method string getModifyType() Obtain Tag type. Valid values: Cluster and Node
 * @method void setModifyType(string $ModifyType) Set Tag type. Valid values: Cluster and Node
 * @method array getModifyResourceTagsInfoList() Obtain Tag information
 * @method void setModifyResourceTagsInfoList(array $ModifyResourceTagsInfoList) Set Tag information
 */
class ModifyResourcesTagsRequest extends AbstractModel
{
    /**
     * @var string Tag type. Valid values: Cluster and Node
     */
    public $ModifyType;

    /**
     * @var array Tag information
     */
    public $ModifyResourceTagsInfoList;

    /**
     * @param string $ModifyType Tag type. Valid values: Cluster and Node
     * @param array $ModifyResourceTagsInfoList Tag information
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("ModifyResourceTagsInfoList",$param) and $param["ModifyResourceTagsInfoList"] !== null) {
            $this->ModifyResourceTagsInfoList = [];
            foreach ($param["ModifyResourceTagsInfoList"] as $key => $value){
                $obj = new ModifyResourceTags();
                $obj->deserialize($value);
                array_push($this->ModifyResourceTagsInfoList, $obj);
            }
        }
    }
}
