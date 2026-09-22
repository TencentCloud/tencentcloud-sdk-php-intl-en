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
 * DescribeSubAppIds request structure.
 *
 * @method string getName() Obtain Application name
 * @method void setName(string $Name) Set Application name
 * @method array getTags() Obtain Tag information. Query the application list of a specified tag.
 * @method void setTags(array $Tags) Set Tag information. Query the application list of a specified tag.
 * @method integer getOffset() Obtain Starting offset for pagination pull. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset for pagination pull. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of results returned for pagination pull. Default value: 200; maximum value: 200.
 * @method void setLimit(integer $Limit) Set Maximum number of results returned for pagination pull. Default value: 200; maximum value: 200.
 */
class DescribeSubAppIdsRequest extends AbstractModel
{
    /**
     * @var string Application name
     */
    public $Name;

    /**
     * @var array Tag information. Query the application list of a specified tag.
     */
    public $Tags;

    /**
     * @var integer Starting offset for pagination pull. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of results returned for pagination pull. Default value: 200; maximum value: 200.
     */
    public $Limit;

    /**
     * @param string $Name Application name
     * @param array $Tags Tag information. Query the application list of a specified tag.
     * @param integer $Offset Starting offset for pagination pull. Default value: 0.
     * @param integer $Limit Maximum number of results returned for pagination pull. Default value: 200; maximum value: 200.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
