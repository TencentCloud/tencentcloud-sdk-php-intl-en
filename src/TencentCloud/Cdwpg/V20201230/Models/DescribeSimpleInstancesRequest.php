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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSimpleInstances request structure.
 *
 * @method string getSearchInstanceId() Obtain Search Instance Id
 * @method void setSearchInstanceId(string $SearchInstanceId) Set Search Instance Id
 * @method string getSearchInstanceName() Obtain Search Instance Name
 * @method void setSearchInstanceName(string $SearchInstanceName) Set Search Instance Name
 * @method integer getOffset() Obtain 	
Offset
 * @method void setOffset(integer $Offset) Set 	
Offset
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method array getSearchTags() Obtain Search Tags
 * @method void setSearchTags(array $SearchTags) Set Search Tags
 */
class DescribeSimpleInstancesRequest extends AbstractModel
{
    /**
     * @var string Search Instance Id
     */
    public $SearchInstanceId;

    /**
     * @var string Search Instance Name
     */
    public $SearchInstanceName;

    /**
     * @var integer 	
Offset
     */
    public $Offset;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var array Search Tags
     */
    public $SearchTags;

    /**
     * @param string $SearchInstanceId Search Instance Id
     * @param string $SearchInstanceName Search Instance Name
     * @param integer $Offset 	
Offset
     * @param integer $Limit Limit
     * @param array $SearchTags Search Tags
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
        if (array_key_exists("SearchInstanceId",$param) and $param["SearchInstanceId"] !== null) {
            $this->SearchInstanceId = $param["SearchInstanceId"];
        }

        if (array_key_exists("SearchInstanceName",$param) and $param["SearchInstanceName"] !== null) {
            $this->SearchInstanceName = $param["SearchInstanceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchTags",$param) and $param["SearchTags"] !== null) {
            $this->SearchTags = $param["SearchTags"];
        }
    }
}
