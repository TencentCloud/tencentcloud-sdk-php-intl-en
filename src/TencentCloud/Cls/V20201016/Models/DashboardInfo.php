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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dashboard information
 *
 * @method string getDashboardId() Obtain Dashboard ID
 * @method void setDashboardId(string $DashboardId) Set Dashboard ID
 * @method string getDashboardName() Obtain Dashboard name
 * @method void setDashboardName(string $DashboardName) Set Dashboard name
 * @method string getData() Obtain Dashboard data
 * @method void setData(string $Data) Set Dashboard data
 * @method string getCreateTime() Obtain Time when the dashboard was created. Format: YYYY-MM-DD HH:MM:SS
 * @method void setCreateTime(string $CreateTime) Set Time when the dashboard was created. Format: YYYY-MM-DD HH:MM:SS
 * @method integer getAssumerUin() Obtain If AssumerUin is not empty, it indicates the UIN of the service party that created the log topic.
 * @method void setAssumerUin(integer $AssumerUin) Set If AssumerUin is not empty, it indicates the UIN of the service party that created the log topic.
 * @method string getRoleName() Obtain If RoleName is not empty, it indicates the role of the service provider creating the log set.
 * @method void setRoleName(string $RoleName) Set If RoleName is not empty, it indicates the role of the service provider creating the log set.
 * @method string getAssumerName() Obtain If AssumerName is not empty, it indicates the name of the service provider creating the log topic.
 * @method void setAssumerName(string $AssumerName) Set If AssumerName is not empty, it indicates the name of the service provider creating the log topic.
 * @method array getTags() Obtain Information of tag bound to log topic
 * @method void setTags(array $Tags) Set Information of tag bound to log topic
 * @method string getDashboardRegion() Obtain Dashboard region: For compatibility with old regions.
 * @method void setDashboardRegion(string $DashboardRegion) Set Dashboard region: For compatibility with old regions.
 * @method string getUpdateTime() Obtain Modify dashboard time. Format: YYYY-MM-DD HH:MM:SS
 * @method void setUpdateTime(string $UpdateTime) Set Modify dashboard time. Format: YYYY-MM-DD HH:MM:SS
 * @method array getDashboardTopicInfos() Obtain Topic-related information corresponding to the dashboard
 * @method void setDashboardTopicInfos(array $DashboardTopicInfos) Set Topic-related information corresponding to the dashboard
 */
class DashboardInfo extends AbstractModel
{
    /**
     * @var string Dashboard ID
     */
    public $DashboardId;

    /**
     * @var string Dashboard name
     */
    public $DashboardName;

    /**
     * @var string Dashboard data
     */
    public $Data;

    /**
     * @var string Time when the dashboard was created. Format: YYYY-MM-DD HH:MM:SS
     */
    public $CreateTime;

    /**
     * @var integer If AssumerUin is not empty, it indicates the UIN of the service party that created the log topic.
     */
    public $AssumerUin;

    /**
     * @var string If RoleName is not empty, it indicates the role of the service provider creating the log set.
     */
    public $RoleName;

    /**
     * @var string If AssumerName is not empty, it indicates the name of the service provider creating the log topic.
     */
    public $AssumerName;

    /**
     * @var array Information of tag bound to log topic
     */
    public $Tags;

    /**
     * @var string Dashboard region: For compatibility with old regions.
     */
    public $DashboardRegion;

    /**
     * @var string Modify dashboard time. Format: YYYY-MM-DD HH:MM:SS
     */
    public $UpdateTime;

    /**
     * @var array Topic-related information corresponding to the dashboard
     */
    public $DashboardTopicInfos;

    /**
     * @param string $DashboardId Dashboard ID
     * @param string $DashboardName Dashboard name
     * @param string $Data Dashboard data
     * @param string $CreateTime Time when the dashboard was created. Format: YYYY-MM-DD HH:MM:SS
     * @param integer $AssumerUin If AssumerUin is not empty, it indicates the UIN of the service party that created the log topic.
     * @param string $RoleName If RoleName is not empty, it indicates the role of the service provider creating the log set.
     * @param string $AssumerName If AssumerName is not empty, it indicates the name of the service provider creating the log topic.
     * @param array $Tags Information of tag bound to log topic
     * @param string $DashboardRegion Dashboard region: For compatibility with old regions.
     * @param string $UpdateTime Modify dashboard time. Format: YYYY-MM-DD HH:MM:SS
     * @param array $DashboardTopicInfos Topic-related information corresponding to the dashboard
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
        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("DashboardName",$param) and $param["DashboardName"] !== null) {
            $this->DashboardName = $param["DashboardName"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssumerUin",$param) and $param["AssumerUin"] !== null) {
            $this->AssumerUin = $param["AssumerUin"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DashboardRegion",$param) and $param["DashboardRegion"] !== null) {
            $this->DashboardRegion = $param["DashboardRegion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DashboardTopicInfos",$param) and $param["DashboardTopicInfos"] !== null) {
            $this->DashboardTopicInfos = [];
            foreach ($param["DashboardTopicInfos"] as $key => $value){
                $obj = new DashboardTopicInfo();
                $obj->deserialize($value);
                array_push($this->DashboardTopicInfos, $obj);
            }
        }
    }
}
