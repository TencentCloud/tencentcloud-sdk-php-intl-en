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
 * 
 *
 * @method string getTaskId() Obtain 
 * @method void setTaskId(string $TaskId) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getFileName() Obtain 
 * @method void setFileName(string $FileName) Set 
 * @method string getFileUrl() Obtain 
 * @method void setFileUrl(string $FileUrl) Set 
 * @method MediaMetaData getMetaData() Obtain 
 * @method void setMetaData(MediaMetaData $MetaData) Set 
 * @method array getMediaProcessResultSet() Obtain 
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 * @method string getTasksNotifyMode() Obtain 
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 */
class ReduceMediaBitrateTask extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskId;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $FileName;

    /**
     * @var string 
     */
    public $FileUrl;

    /**
     * @var MediaMetaData 
     */
    public $MetaData;

    /**
     * @var array 
     */
    public $MediaProcessResultSet;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @var string 
     */
    public $TasksNotifyMode;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @param string $TaskId 
     * @param string $Status 
     * @param string $FileId 
     * @param string $FileName 
     * @param string $FileUrl 
     * @param MediaMetaData $MetaData 
     * @param array $MediaProcessResultSet 
     * @param integer $TasksPriority 
     * @param string $TasksNotifyMode 
     * @param string $SessionContext 
     * @param string $SessionId 
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new ReduceMediaBitrateMediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
