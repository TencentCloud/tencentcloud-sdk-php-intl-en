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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetGroupDetail request structure.
 *
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
 * @method integer getPageSize() Obtain Display per page number of records. When PageSize and PageNumber are -1, match all devices by 1 page with no limit entries.	
Example value: 1.

 * @method void setPageSize(integer $PageSize) Set Display per page number of records. When PageSize and PageNumber are -1, match all devices by 1 page with no limit entries.	
Example value: 1.

 * @method integer getPageNumber() Obtain Number of records displayed per page. When PageSize and PageNumber are both -1, match all devices by 1 page with no limit entries.	
Example value: 10.

 * @method void setPageNumber(integer $PageNumber) Set Number of records displayed per page. When PageSize and PageNumber are both -1, match all devices by 1 page with no limit entries.	
Example value: 10.

 * @method string getKeyWord() Obtain Search Keywords
 * @method void setKeyWord(string $KeyWord) Set Search Keywords
 */
class GetGroupDetailRequest extends AbstractModel
{
    /**
     * @var string group ID
     */
    public $GroupId;

    /**
     * @var integer Display per page number of records. When PageSize and PageNumber are -1, match all devices by 1 page with no limit entries.	
Example value: 1.

     */
    public $PageSize;

    /**
     * @var integer Number of records displayed per page. When PageSize and PageNumber are both -1, match all devices by 1 page with no limit entries.	
Example value: 10.

     */
    public $PageNumber;

    /**
     * @var string Search Keywords
     */
    public $KeyWord;

    /**
     * @param string $GroupId group ID
     * @param integer $PageSize Display per page number of records. When PageSize and PageNumber are -1, match all devices by 1 page with no limit entries.	
Example value: 1.

     * @param integer $PageNumber Number of records displayed per page. When PageSize and PageNumber are both -1, match all devices by 1 page with no limit entries.	
Example value: 10.

     * @param string $KeyWord Search Keywords
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }
    }
}
