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
 * EditMedia request structure.
 *
 * @method string getInputType() Obtain Type of input video. Optional values: File, Stream.
 * @method void setInputType(string $InputType) Set Type of input video. Optional values: File, Stream.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method array getFileInfos() Obtain Input video file information. Required when InputType is File.
 * @method void setFileInfos(array $FileInfos) Set Input video file information. Required when InputType is File.
 * @method array getStreamInfos() Obtain Input stream information. Required when InputType is Stream.
 * @method void setStreamInfos(array $StreamInfos) Set Input stream information. Required when InputType is Stream.
 * @method integer getDefinition() Obtain Edit template ID. Valid values: 10, 20. Leave empty to use template 10.
<li>10: During splicing, use the input with the highest resolution as the base;</li>
<li>20: During splicing, use the input with the highest bitrate as the base.</li>
 * @method void setDefinition(integer $Definition) Set Edit template ID. Valid values: 10, 20. Leave empty to use template 10.
<li>10: During splicing, use the input with the highest resolution as the base;</li>
<li>20: During splicing, use the input with the highest bitrate as the base.</li>
 * @method string getProcedureName() Obtain [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in if you need to execute task flow on the generated new video.
 * @method void setProcedureName(string $ProcedureName) Set [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in if you need to execute task flow on the generated new video.
 * @method EditMediaOutputConfig getOutputConfig() Obtain File configuration generated after editing.
 * @method void setOutputConfig(EditMediaOutputConfig $OutputConfig) Set File configuration generated after editing.
 * @method string getSessionContext() Obtain Identify source context. This is used to pass through user request information. The EditMediaComplete callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Identify source context. This is used to pass through user request information. The EditMediaComplete callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.
 * @method integer getTasksPriority() Obtain Priority of the task. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method string getSessionId() Obtain Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 */
class EditMediaRequest extends AbstractModel
{
    /**
     * @var string Type of input video. Optional values: File, Stream.
     */
    public $InputType;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var array Input video file information. Required when InputType is File.
     */
    public $FileInfos;

    /**
     * @var array Input stream information. Required when InputType is Stream.
     */
    public $StreamInfos;

    /**
     * @var integer Edit template ID. Valid values: 10, 20. Leave empty to use template 10.
<li>10: During splicing, use the input with the highest resolution as the base;</li>
<li>20: During splicing, use the input with the highest bitrate as the base.</li>
     */
    public $Definition;

    /**
     * @var string [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in if you need to execute task flow on the generated new video.
     */
    public $ProcedureName;

    /**
     * @var EditMediaOutputConfig File configuration generated after editing.
     */
    public $OutputConfig;

    /**
     * @var string Identify source context. This is used to pass through user request information. The EditMediaComplete callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Priority of the task. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     */
    public $TasksPriority;

    /**
     * @var string Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @param string $InputType Type of input video. Optional values: File, Stream.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param array $FileInfos Input video file information. Required when InputType is File.
     * @param array $StreamInfos Input stream information. Required when InputType is Stream.
     * @param integer $Definition Edit template ID. Valid values: 10, 20. Leave empty to use template 10.
<li>10: During splicing, use the input with the highest resolution as the base;</li>
<li>20: During splicing, use the input with the highest bitrate as the base.</li>
     * @param string $ProcedureName [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name. Fill in if you need to execute task flow on the generated new video.
     * @param EditMediaOutputConfig $OutputConfig File configuration generated after editing.
     * @param string $SessionContext Identify source context. This is used to pass through user request information. The EditMediaComplete callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.
     * @param integer $TasksPriority Priority of the task. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     * @param string $SessionId Identifier for task deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     * @param string $ExtInfo Reserved field, used when special purpose.
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
