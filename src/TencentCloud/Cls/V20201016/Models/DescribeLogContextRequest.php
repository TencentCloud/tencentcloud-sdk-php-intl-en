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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogContext request structure.
 *
 * @method string getTopicId() Obtain Log topic ID to be queried
 * @method void setTopicId(string $TopicId) Set Log topic ID to be queried
 * @method string getBTime() Obtain Log time in the format of YYYY-mm-dd HH:MM:SS.FFF
 * @method void setBTime(string $BTime) Set Log time in the format of YYYY-mm-dd HH:MM:SS.FFF
 * @method string getPkgId() Obtain Log package sequence number. PkgId in the Results structure of the returned information of SearchLog API.
 * @method void setPkgId(string $PkgId) Set Log package sequence number. PkgId in the Results structure of the returned information of SearchLog API.
 * @method integer getPkgLogId() Obtain Sequence number of a log within the log package.
The PkgLogId in the Results structure of the SearchLog API returned information.
 * @method void setPkgLogId(integer $PkgLogId) Set Sequence number of a log within the log package.
The PkgLogId in the Results structure of the SearchLog API returned information.
 * @method integer getPrevLogs() Obtain The previous ${PrevLogs} logs. Default value: 10.
 * @method void setPrevLogs(integer $PrevLogs) Set The previous ${PrevLogs} logs. Default value: 10.
 * @method integer getNextLogs() Obtain The next ${NextLogs} logs. Default value: 10.
 * @method void setNextLogs(integer $NextLogs) Set The next ${NextLogs} logs. Default value: 10.
 */
class DescribeLogContextRequest extends AbstractModel
{
    /**
     * @var string Log topic ID to be queried
     */
    public $TopicId;

    /**
     * @var string Log time in the format of YYYY-mm-dd HH:MM:SS.FFF
     */
    public $BTime;

    /**
     * @var string Log package sequence number. PkgId in the Results structure of the returned information of SearchLog API.
     */
    public $PkgId;

    /**
     * @var integer Sequence number of a log within the log package.
The PkgLogId in the Results structure of the SearchLog API returned information.
     */
    public $PkgLogId;

    /**
     * @var integer The previous ${PrevLogs} logs. Default value: 10.
     */
    public $PrevLogs;

    /**
     * @var integer The next ${NextLogs} logs. Default value: 10.
     */
    public $NextLogs;

    /**
     * @param string $TopicId Log topic ID to be queried
     * @param string $BTime Log time in the format of YYYY-mm-dd HH:MM:SS.FFF
     * @param string $PkgId Log package sequence number. PkgId in the Results structure of the returned information of SearchLog API.
     * @param integer $PkgLogId Sequence number of a log within the log package.
The PkgLogId in the Results structure of the SearchLog API returned information.
     * @param integer $PrevLogs The previous ${PrevLogs} logs. Default value: 10.
     * @param integer $NextLogs The next ${NextLogs} logs. Default value: 10.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("PrevLogs",$param) and $param["PrevLogs"] !== null) {
            $this->PrevLogs = $param["PrevLogs"];
        }

        if (array_key_exists("NextLogs",$param) and $param["NextLogs"] !== null) {
            $this->NextLogs = $param["NextLogs"];
        }
    }
}
