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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterConfigsHistory request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method integer getOffset() Obtain Pagination parameters. The first page is 0, and the second page is 10.
 * @method void setOffset(integer $Offset) Set Pagination parameters. The first page is 0, and the second page is 10.
 * @method integer getLimit() Obtain Pagination parameters. The pagination step length is 10 by default.
 * @method void setLimit(integer $Limit) Set Pagination parameters. The pagination step length is 10 by default.
 * @method string getStartTime() Obtain Start of the time range for configuration modification history
 * @method void setStartTime(string $StartTime) Set Start of the time range for configuration modification history
 * @method string getEndTime() Obtain End of the time range for configuration modification history
 * @method void setEndTime(string $EndTime) Set End of the time range for configuration modification history
 * @method array getConfigFileNames() Obtain Configuration file name array to be queried. If it is empty, all historical records will be queried. Currently supported configuration file names are as follows:
apache_hdfs_broker.conf; be.conf; fe.conf; core-site.xml; hdfs-site.xml; odbcinst.ini
 * @method void setConfigFileNames(array $ConfigFileNames) Set Configuration file name array to be queried. If it is empty, all historical records will be queried. Currently supported configuration file names are as follows:
apache_hdfs_broker.conf; be.conf; fe.conf; core-site.xml; hdfs-site.xml; odbcinst.ini
 */
class DescribeClusterConfigsHistoryRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var integer Pagination parameters. The first page is 0, and the second page is 10.
     */
    public $Offset;

    /**
     * @var integer Pagination parameters. The pagination step length is 10 by default.
     */
    public $Limit;

    /**
     * @var string Start of the time range for configuration modification history
     */
    public $StartTime;

    /**
     * @var string End of the time range for configuration modification history
     */
    public $EndTime;

    /**
     * @var array Configuration file name array to be queried. If it is empty, all historical records will be queried. Currently supported configuration file names are as follows:
apache_hdfs_broker.conf; be.conf; fe.conf; core-site.xml; hdfs-site.xml; odbcinst.ini
     */
    public $ConfigFileNames;

    /**
     * @param string $InstanceId Cluster ID
     * @param integer $Offset Pagination parameters. The first page is 0, and the second page is 10.
     * @param integer $Limit Pagination parameters. The pagination step length is 10 by default.
     * @param string $StartTime Start of the time range for configuration modification history
     * @param string $EndTime End of the time range for configuration modification history
     * @param array $ConfigFileNames Configuration file name array to be queried. If it is empty, all historical records will be queried. Currently supported configuration file names are as follows:
apache_hdfs_broker.conf; be.conf; fe.conf; core-site.xml; hdfs-site.xml; odbcinst.ini
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ConfigFileNames",$param) and $param["ConfigFileNames"] !== null) {
            $this->ConfigFileNames = $param["ConfigFileNames"];
        }
    }
}
