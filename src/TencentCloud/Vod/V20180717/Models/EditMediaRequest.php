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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditMedia request structure.
 *
 * @method string getInputType() Obtain Input the type of video. The possible values u200bu200bare File and Stream.
 * @method void setInputType(string $InputType) Set Input the type of video. The possible values u200bu200bare File and Stream.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method array getFileInfos() Obtain Input video file information, required when InputType is File.
 * @method void setFileInfos(array $FileInfos) Set Input video file information, required when InputType is File.
 * @method array getStreamInfos() Obtain nput stream information, required when InputType is Stream.
 * @method void setStreamInfos(array $StreamInfos) Set nput stream information, required when InputType is Stream.
 * @method integer getDefinition() Obtain EditMedia template ID. The values u200bu200bare 10 and 20. If left blank, the 10 template is used. 
<li>10: When splicing, the input with the highest resolution is used as the benchmark;</li>
<li>20: When splicing, the input with the highest code rate is used as the benchmark. </li>
 * @method void setDefinition(integer $Definition) Set EditMedia template ID. The values u200bu200bare 10 and 20. If left blank, the 10 template is used. 
<li>10: When splicing, the input with the highest resolution is used as the benchmark;</li>
<li>20: When splicing, the input with the highest code rate is used as the benchmark. </li>
 * @method string getProcedureName() Obtain Task flow template name, if you want Fill in when executing the task flow on the generated new video.
 * @method void setProcedureName(string $ProcedureName) Set Task flow template name, if you want Fill in when executing the task flow on the generated new video.
 * @method EditMediaOutputConfig getOutputConfig() Obtain The file configuration generated after editing.
 * @method void setOutputConfig(EditMediaOutputConfig $OutputConfig) Set The file configuration generated after editing.
 * @method string getSessionContext() Obtain Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the EditMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the EditMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
 * @method integer getTasksPriority() Obtain The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
 * @method void setTasksPriority(integer $TasksPriority) Set The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
 * @method string getSessionId() Obtain The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method void setSessionId(string $SessionId) Set The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method string getExtInfo() Obtain Reserved fields, used for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved fields, used for special purposes.
 */
class EditMediaRequest extends AbstractModel
{
    /**
     * @var string Input the type of video. The possible values u200bu200bare File and Stream.
     */
    public $InputType;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var array Input video file information, required when InputType is File.
     */
    public $FileInfos;

    /**
     * @var array nput stream information, required when InputType is Stream.
     */
    public $StreamInfos;

    /**
     * @var integer EditMedia template ID. The values u200bu200bare 10 and 20. If left blank, the 10 template is used. 
<li>10: When splicing, the input with the highest resolution is used as the benchmark;</li>
<li>20: When splicing, the input with the highest code rate is used as the benchmark. </li>
     */
    public $Definition;

    /**
     * @var string Task flow template name, if you want Fill in when executing the task flow on the generated new video.
     */
    public $ProcedureName;

    /**
     * @var EditMediaOutputConfig The file configuration generated after editing.
     */
    public $OutputConfig;

    /**
     * @var string Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the EditMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
     */
    public $TasksPriority;

    /**
     * @var string The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     */
    public $SessionId;

    /**
     * @var string Reserved fields, used for special purposes.
     */
    public $ExtInfo;

    /**
     * @param string $InputType Input the type of video. The possible values u200bu200bare File and Stream.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param array $FileInfos Input video file information, required when InputType is File.
     * @param array $StreamInfos nput stream information, required when InputType is Stream.
     * @param integer $Definition EditMedia template ID. The values u200bu200bare 10 and 20. If left blank, the 10 template is used. 
<li>10: When splicing, the input with the highest resolution is used as the benchmark;</li>
<li>20: When splicing, the input with the highest code rate is used as the benchmark. </li>
     * @param string $ProcedureName Task flow template name, if you want Fill in when executing the task flow on the generated new video.
     * @param EditMediaOutputConfig $OutputConfig The file configuration generated after editing.
     * @param string $SessionContext Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the EditMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
     * @param integer $TasksPriority The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
     * @param string $SessionId The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     * @param string $ExtInfo Reserved fields, used for special purposes.
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new EditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new EditMediaStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ProcedureName",$param) and $param["ProcedureName"] !== null) {
            $this->ProcedureName = $param["ProcedureName"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new EditMediaOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
