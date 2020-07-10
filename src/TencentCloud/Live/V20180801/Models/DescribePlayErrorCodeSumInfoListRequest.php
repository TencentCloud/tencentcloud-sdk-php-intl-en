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
 * DescribePlayErrorCodeSumInfoList request structure.
 *
 * @method string getStartTime() Obtain Start time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
 * @method void setStartTime(string $StartTime) Set Start time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
 * @method string getEndTime() Obtain End time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
 * @method void setEndTime(string $EndTime) Set End time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
 * @method array getPlayDomains() Obtain List of playback domain names. If it is blank by default, the full data will be queried.
 * @method void setPlayDomains(array $PlayDomains) Set List of playback domain names. If it is blank by default, the full data will be queried.
 * @method integer getPageNum() Obtain Page number.
Value range: [1,1000],
Default value: 1.
 * @method void setPageNum(integer $PageNum) Set Page number.
Value range: [1,1000],
Default value: 1.
 * @method integer getPageSize() Obtain Number of entries per page,
Value range: [1,1000],
Default value: 20.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page,
Value range: [1,1000],
Default value: 20.
 * @method string getMainlandOrOversea() Obtain 
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set 
 * @method string getGroupType() Obtain 
 * @method void setGroupType(string $GroupType) Set 
 * @method string getOutLanguage() Obtain 
 * @method void setOutLanguage(string $OutLanguage) Set 
 */
class DescribePlayErrorCodeSumInfoListRequest extends AbstractModel
{
    /**
     * @var string Start time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
     */
    public $StartTime;

    /**
     * @var string End time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
     */
    public $EndTime;

    /**
     * @var array List of playback domain names. If it is blank by default, the full data will be queried.
     */
    public $PlayDomains;

    /**
     * @var integer Page number.
Value range: [1,1000],
Default value: 1.
     */
    public $PageNum;

    /**
     * @var integer Number of entries per page,
Value range: [1,1000],
Default value: 20.
     */
    public $PageSize;

    /**
     * @var string 
     */
    public $MainlandOrOversea;

    /**
     * @var string 
     */
    public $GroupType;

    /**
     * @var string 
     */
    public $OutLanguage;

    /**
     * @param string $StartTime Start time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
     * @param string $EndTime End time point (Beijing time).
In the format of yyyy-mm-dd HH:MM:SS.
Note: EndTime and StartTime only support querying data on the past day.
     * @param array $PlayDomains List of playback domain names. If it is blank by default, the full data will be queried.
     * @param integer $PageNum Page number.
Value range: [1,1000],
Default value: 1.
     * @param integer $PageSize Number of entries per page,
Value range: [1,1000],
Default value: 20.
     * @param string $MainlandOrOversea 
     * @param string $GroupType 
     * @param string $OutLanguage 
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

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("OutLanguage",$param) and $param["OutLanguage"] !== null) {
            $this->OutLanguage = $param["OutLanguage"];
        }
    }
}
