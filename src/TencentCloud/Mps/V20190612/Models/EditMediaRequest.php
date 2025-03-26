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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditMedia request structure.
 *
 * @method array getFileInfos() Obtain Information of input video file.
 * @method void setFileInfos(array $FileInfos) Set Information of input video file.
 * @method TaskOutputStorage getOutputStorage() Obtain The storage location of the media processing output file.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set The storage location of the media processing output file.
 * @method string getOutputObjectPath() Obtain The path to save the media processing output file.

Note: For complex compositing tasks, the filename can be up to 64 characters long and can only contain digits, letters, and special characters -_

 * @method void setOutputObjectPath(string $OutputObjectPath) Set The path to save the media processing output file.

Note: For complex compositing tasks, the filename can be up to 64 characters long and can only contain digits, letters, and special characters -_

 * @method EditMediaOutputConfig getOutputConfig() Obtain The output settings for a video clipping task.
 * @method void setOutputConfig(EditMediaOutputConfig $OutputConfig) Set The output settings for a video clipping task.
 * @method ComposeMediaConfig getComposeConfig() Obtain The settings for a video compositing task.

Note: If this parameter is not empty, the task is a video compositing task. Otherwise, the task is a video clipping task.
 * @method void setComposeConfig(ComposeMediaConfig $ComposeConfig) Set The settings for a video compositing task.

Note: If this parameter is not empty, the task is a video compositing task. Otherwise, the task is a video clipping task.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of task. If this parameter is left empty, no event notifications will be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of task. If this parameter is left empty, no event notifications will be obtained.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. Value range: -10 - 10. If this parameter is left empty, 0 will be used.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. Value range: -10 - 10. If this parameter is left empty, 0 will be used.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
 */
class EditMediaRequest extends AbstractModel
{
    /**
     * @var array Information of input video file.
     */
    public $FileInfos;

    /**
     * @var TaskOutputStorage The storage location of the media processing output file.
     */
    public $OutputStorage;

    /**
     * @var string The path to save the media processing output file.

Note: For complex compositing tasks, the filename can be up to 64 characters long and can only contain digits, letters, and special characters -_

     */
    public $OutputObjectPath;

    /**
     * @var EditMediaOutputConfig The output settings for a video clipping task.
     */
    public $OutputConfig;

    /**
     * @var ComposeMediaConfig The settings for a video compositing task.

Note: If this parameter is not empty, the task is a video compositing task. Otherwise, the task is a video clipping task.
     */
    public $ComposeConfig;

    /**
     * @var TaskNotifyConfig Event notification information of task. If this parameter is left empty, no event notifications will be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. Value range: -10 - 10. If this parameter is left empty, 0 will be used.
     */
    public $TasksPriority;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @param array $FileInfos Information of input video file.
     * @param TaskOutputStorage $OutputStorage The storage location of the media processing output file.
     * @param string $OutputObjectPath The path to save the media processing output file.

Note: For complex compositing tasks, the filename can be up to 64 characters long and can only contain digits, letters, and special characters -_

     * @param EditMediaOutputConfig $OutputConfig The output settings for a video clipping task.
     * @param ComposeMediaConfig $ComposeConfig The settings for a video compositing task.

Note: If this parameter is not empty, the task is a video compositing task. Otherwise, the task is a video clipping task.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of task. If this parameter is left empty, no event notifications will be obtained.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. Value range: -10 - 10. If this parameter is left empty, 0 will be used.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last three days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or an empty string is entered, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new EditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new EditMediaOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("ComposeConfig",$param) and $param["ComposeConfig"] !== null) {
            $this->ComposeConfig = new ComposeMediaConfig();
            $this->ComposeConfig->deserialize($param["ComposeConfig"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
