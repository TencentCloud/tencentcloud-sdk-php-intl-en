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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationNodes request structure.
 *
 * @method integer getLimit() Obtain Maximum number of returned results. Maximum value: `50`.
 * @method void setLimit(integer $Limit) Set Maximum number of returned results. Maximum value: `50`.
 * @method integer getOffset() Obtain Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Its value must be an integer multiple of the limit. Default value: 0.
 * @method array getTags() Obtain Department tag search list, with a maximum of 10.
 * @method void setTags(array $Tags) Set Department tag search list, with a maximum of 10.
 */
class DescribeOrganizationNodesRequest extends AbstractModel
{
    /**
     * @var integer Maximum number of returned results. Maximum value: `50`.
     */
    public $Limit;

    /**
     * @var integer Offset. Its value must be an integer multiple of the limit. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Department tag search list, with a maximum of 10.
     */
    public $Tags;

    /**
     * @param integer $Limit Maximum number of returned results. Maximum value: `50`.
     * @param integer $Offset Offset. Its value must be an integer multiple of the limit. Default value: 0.
     * @param array $Tags Department tag search list, with a maximum of 10.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
