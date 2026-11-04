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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogList request structure.
 *
 * @method string getSpaceId() Obtain <p>Space id</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space id</p>
 * @method integer getLimit() Obtain <p>Number of items per page</p><p>Value range: [1, 100]</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page</p><p>Value range: [1, 100]</p>
 * @method array getSearchAfter() Obtain <p>Query start position of ES</p><p>The corresponding API returns SearchAfter</p>
 * @method void setSearchAfter(array $SearchAfter) Set <p>Query start position of ES</p><p>The corresponding API returns SearchAfter</p>
 * @method array getFilterList() Obtain <p>Parameter filtering</p><p>Supports Action, BizObject, Content<br>Supports SpaceId, AccountUin, AppId (up to 100)<br>Supports startTime, endTime (timestamp in seconds)</p>
 * @method void setFilterList(array $FilterList) Set <p>Parameter filtering</p><p>Supports Action, BizObject, Content<br>Supports SpaceId, AccountUin, AppId (up to 100)<br>Supports startTime, endTime (timestamp in seconds)</p>
 */
class DescribeAuditLogListRequest extends AbstractModel
{
    /**
     * @var string <p>Space id</p>
     */
    public $SpaceId;

    /**
     * @var integer <p>Number of items per page</p><p>Value range: [1, 100]</p>
     */
    public $Limit;

    /**
     * @var array <p>Query start position of ES</p><p>The corresponding API returns SearchAfter</p>
     */
    public $SearchAfter;

    /**
     * @var array <p>Parameter filtering</p><p>Supports Action, BizObject, Content<br>Supports SpaceId, AccountUin, AppId (up to 100)<br>Supports startTime, endTime (timestamp in seconds)</p>
     */
    public $FilterList;

    /**
     * @param string $SpaceId <p>Space id</p>
     * @param integer $Limit <p>Number of items per page</p><p>Value range: [1, 100]</p>
     * @param array $SearchAfter <p>Query start position of ES</p><p>The corresponding API returns SearchAfter</p>
     * @param array $FilterList <p>Parameter filtering</p><p>Supports Action, BizObject, Content<br>Supports SpaceId, AccountUin, AppId (up to 100)<br>Supports startTime, endTime (timestamp in seconds)</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
