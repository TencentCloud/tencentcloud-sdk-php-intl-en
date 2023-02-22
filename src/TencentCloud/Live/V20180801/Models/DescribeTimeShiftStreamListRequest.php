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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeShiftStreamList request structure.
 *
 * @method integer getStartTime() Obtain The start time, which must be a Unix timestamp.
 * @method void setStartTime(integer $StartTime) Set The start time, which must be a Unix timestamp.
 * @method integer getEndTime() Obtain The end time, which must be a Unix timestamp.
 * @method void setEndTime(integer $EndTime) Set The end time, which must be a Unix timestamp.
 * @method string getStreamName() Obtain The stream name.
 * @method void setStreamName(string $StreamName) Set The stream name.
 * @method string getDomain() Obtain The push domain.
 * @method void setDomain(string $Domain) Set The push domain.
 * @method string getDomainGroup() Obtain The group the push domain belongs to.
 * @method void setDomainGroup(string $DomainGroup) Set The group the push domain belongs to.
 * @method integer getPageSize() Obtain The maximum number of records to return. Value range: 0-100. If you do not specify this parameter or pass in `0`, 
the default value `100` will be used. If you pass in a negative number or a value greater than 100, an error will be returned.
 * @method void setPageSize(integer $PageSize) Set The maximum number of records to return. Value range: 0-100. If you do not specify this parameter or pass in `0`, 
the default value `100` will be used. If you pass in a negative number or a value greater than 100, an error will be returned.
 * @method integer getPageNum() Obtain The number of page to pull records from. If you do not specify this parameter, the default value `1` will be used.
 * @method void setPageNum(integer $PageNum) Set The number of page to pull records from. If you do not specify this parameter, the default value `1` will be used.
 */
class DescribeTimeShiftStreamListRequest extends AbstractModel
{
    /**
     * @var integer The start time, which must be a Unix timestamp.
     */
    public $StartTime;

    /**
     * @var integer The end time, which must be a Unix timestamp.
     */
    public $EndTime;

    /**
     * @var string The stream name.
     */
    public $StreamName;

    /**
     * @var string The push domain.
     */
    public $Domain;

    /**
     * @var string The group the push domain belongs to.
     */
    public $DomainGroup;

    /**
     * @var integer The maximum number of records to return. Value range: 0-100. If you do not specify this parameter or pass in `0`, 
the default value `100` will be used. If you pass in a negative number or a value greater than 100, an error will be returned.
     */
    public $PageSize;

    /**
     * @var integer The number of page to pull records from. If you do not specify this parameter, the default value `1` will be used.
     */
    public $PageNum;

    /**
     * @param integer $StartTime The start time, which must be a Unix timestamp.
     * @param integer $EndTime The end time, which must be a Unix timestamp.
     * @param string $StreamName The stream name.
     * @param string $Domain The push domain.
     * @param string $DomainGroup The group the push domain belongs to.
     * @param integer $PageSize The maximum number of records to return. Value range: 0-100. If you do not specify this parameter or pass in `0`, 
the default value `100` will be used. If you pass in a negative number or a value greater than 100, an error will be returned.
     * @param integer $PageNum The number of page to pull records from. If you do not specify this parameter, the default value `1` will be used.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainGroup",$param) and $param["DomainGroup"] !== null) {
            $this->DomainGroup = $param["DomainGroup"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
