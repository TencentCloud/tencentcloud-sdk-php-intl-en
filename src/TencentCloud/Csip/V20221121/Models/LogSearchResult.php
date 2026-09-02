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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log retrieval results
 *
 * @method integer getTime() Obtain <p>Time</p>
 * @method void setTime(integer $Time) Set <p>Time</p>
 * @method string getTopicId() Obtain <p>Topic</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic</p>
 * @method string getTopicName() Obtain <p>Topic name.</p>
 * @method void setTopicName(string $TopicName) Set <p>Topic name.</p>
 * @method string getSource() Obtain <p>Source.</p>
 * @method void setSource(string $Source) Set <p>Source.</p>
 * @method string getFileName() Obtain <p>File name</p>
 * @method void setFileName(string $FileName) Set <p>File name</p>
 * @method string getPkgId() Obtain <p>pkgid</p>
 * @method void setPkgId(string $PkgId) Set <p>pkgid</p>
 * @method string getPkgLogId() Obtain <p>pkglogid</p>
 * @method void setPkgLogId(string $PkgLogId) Set <p>pkglogid</p>
 * @method string getLogJson() Obtain <p>json data</p>
 * @method void setLogJson(string $LogJson) Set <p>json data</p>
 * @method string getHostName() Obtain <p>host name</p>
 * @method void setHostName(string $HostName) Set <p>host name</p>
 * @method string getRawLog() Obtain <p>log message</p>
 * @method void setRawLog(string $RawLog) Set <p>log message</p>
 * @method string getIndexStatus() Obtain <p>Index status.</p>
 * @method void setIndexStatus(string $IndexStatus) Set <p>Index status.</p>
 * @method array getHighLights() Obtain <p>Highlighted Information</p>
 * @method void setHighLights(array $HighLights) Set <p>Highlighted Information</p>
 */
class LogSearchResult extends AbstractModel
{
    /**
     * @var integer <p>Time</p>
     */
    public $Time;

    /**
     * @var string <p>Topic</p>
     */
    public $TopicId;

    /**
     * @var string <p>Topic name.</p>
     */
    public $TopicName;

    /**
     * @var string <p>Source.</p>
     */
    public $Source;

    /**
     * @var string <p>File name</p>
     */
    public $FileName;

    /**
     * @var string <p>pkgid</p>
     */
    public $PkgId;

    /**
     * @var string <p>pkglogid</p>
     */
    public $PkgLogId;

    /**
     * @var string <p>json data</p>
     */
    public $LogJson;

    /**
     * @var string <p>host name</p>
     */
    public $HostName;

    /**
     * @var string <p>log message</p>
     */
    public $RawLog;

    /**
     * @var string <p>Index status.</p>
     */
    public $IndexStatus;

    /**
     * @var array <p>Highlighted Information</p>
     */
    public $HighLights;

    /**
     * @param integer $Time <p>Time</p>
     * @param string $TopicId <p>Topic</p>
     * @param string $TopicName <p>Topic name.</p>
     * @param string $Source <p>Source.</p>
     * @param string $FileName <p>File name</p>
     * @param string $PkgId <p>pkgid</p>
     * @param string $PkgLogId <p>pkglogid</p>
     * @param string $LogJson <p>json data</p>
     * @param string $HostName <p>host name</p>
     * @param string $RawLog <p>log message</p>
     * @param string $IndexStatus <p>Index status.</p>
     * @param array $HighLights <p>Highlighted Information</p>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("RawLog",$param) and $param["RawLog"] !== null) {
            $this->RawLog = $param["RawLog"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("HighLights",$param) and $param["HighLights"] !== null) {
            $this->HighLights = [];
            foreach ($param["HighLights"] as $key => $value){
                $obj = new LogHighLightItem();
                $obj->deserialize($value);
                array_push($this->HighLights, $obj);
            }
        }
    }
}
