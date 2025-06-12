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
 * BatchProcessMedia request structure.
 *
 * @method array getInputInfo() Obtain Path of the input file.
 * @method void setInputInfo(array $InputInfo) Set Path of the input file.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage bucket for the output file. If it is left blank, the storage location in InputInfo will be inherited.
Note: When InputInfo.Type is URL, this parameter is required.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage bucket for the output file. If it is left blank, the storage location in InputInfo will be inherited.
Note: When InputInfo.Type is URL, this parameter is required.
 * @method string getOutputDir() Obtain Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left blank, it indicates that the directory is the same as the one where the file is located in InputInfo.
 * @method void setOutputDir(string $OutputDir) Set Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left blank, it indicates that the directory is the same as the one where the file is located in InputInfo.
 * @method SmartSubtitlesTaskInput getSmartSubtitlesTask() Obtain Smart subtitle.
 * @method void setSmartSubtitlesTask(SmartSubtitlesTaskInput $SmartSubtitlesTask) Set Smart subtitle.
 * @method TaskNotifyConfig getTaskNotifyConfig() Obtain Event notification information of the task. If left blank, it indicates that no event notification will be obtained.
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) Set Event notification information of the task. If left blank, it indicates that no event notification will be obtained.
 * @method integer getTasksPriority() Obtain Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getResourceId() Obtain Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
 * @method void setResourceId(string $ResourceId) Set Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
 * @method integer getSkipMateData() Obtain Whether to skip metadata acquisition. Valid values:
0: do not skip.
1: skip.
Default value: 0		
 * @method void setSkipMateData(integer $SkipMateData) Set Whether to skip metadata acquisition. Valid values:
0: do not skip.
1: skip.
Default value: 0		
 */
class BatchProcessMediaRequest extends AbstractModel
{
    /**
     * @var array Path of the input file.
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage Storage bucket for the output file. If it is left blank, the storage location in InputInfo will be inherited.
Note: When InputInfo.Type is URL, this parameter is required.
     */
    public $OutputStorage;

    /**
     * @var string Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left blank, it indicates that the directory is the same as the one where the file is located in InputInfo.
     */
    public $OutputDir;

    /**
     * @var SmartSubtitlesTaskInput Smart subtitle.
     */
    public $SmartSubtitlesTask;

    /**
     * @var TaskNotifyConfig Event notification information of the task. If left blank, it indicates that no event notification will be obtained.
     */
    public $TaskNotifyConfig;

    /**
     * @var integer Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
     */
    public $ResourceId;

    /**
     * @var integer Whether to skip metadata acquisition. Valid values:
0: do not skip.
1: skip.
Default value: 0		
     */
    public $SkipMateData;

    /**
     * @param array $InputInfo Path of the input file.
     * @param TaskOutputStorage $OutputStorage Storage bucket for the output file. If it is left blank, the storage location in InputInfo will be inherited.
Note: When InputInfo.Type is URL, this parameter is required.
     * @param string $OutputDir Storage directory for the output file. It should start and end with a slash (/), such as `/movie/201907/`.
If left blank, it indicates that the directory is the same as the one where the file is located in InputInfo.
     * @param SmartSubtitlesTaskInput $SmartSubtitlesTask Smart subtitle.
     * @param TaskNotifyConfig $TaskNotifyConfig Event notification information of the task. If left blank, it indicates that no event notification will be obtained.
     * @param integer $TasksPriority Priority of the task flow. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $ResourceId Resource ID. Ensure the corresponding resource is in the enabled state. The default value is an account's primary resource ID.
     * @param integer $SkipMateData Whether to skip metadata acquisition. Valid values:
0: do not skip.
1: skip.
Default value: 0		
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = [];
            foreach ($param["InputInfo"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->InputInfo, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("SmartSubtitlesTask",$param) and $param["SmartSubtitlesTask"] !== null) {
            $this->SmartSubtitlesTask = new SmartSubtitlesTaskInput();
            $this->SmartSubtitlesTask->deserialize($param["SmartSubtitlesTask"]);
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SkipMateData",$param) and $param["SkipMateData"] !== null) {
            $this->SkipMateData = $param["SkipMateData"];
        }
    }
}
