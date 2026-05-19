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
 * ProcessMediaByProcedure request structure.
 *
 * @method string getProcedureName() Obtain [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name.
 * @method void setProcedureName(string $ProcedureName) Set [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name.
 * @method string getFileId() Obtain Media file ID.
FileId or MediaStoragePath must be provided.
 * @method void setFileId(string $FileId) Set Media file ID.
FileId or MediaStoragePath must be provided.
 * @method string getMediaStoragePath() Obtain Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
 * @method void setMediaStoragePath(string $MediaStoragePath) Set Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method integer getTasksPriority() Obtain Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method string getTasksNotifyMode() Obtain Task flow status change notification mode. Valid values: Finish, Change, and None. If left empty, it represents Finish.
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set Task flow status change notification mode. Valid values: Finish, Change, and None. If left empty, it represents Finish.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past 7 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past 7 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 */
class ProcessMediaByProcedureRequest extends AbstractModel
{
    /**
     * @var string [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name.
     */
    public $ProcedureName;

    /**
     * @var string Media file ID.
FileId or MediaStoragePath must be provided.
     */
    public $FileId;

    /**
     * @var string Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
     */
    public $MediaStoragePath;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var integer Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     */
    public $TasksPriority;

    /**
     * @var string Task flow status change notification mode. Valid values: Finish, Change, and None. If left empty, it represents Finish.
     */
    public $TasksNotifyMode;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past 7 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @param string $ProcedureName [Task flow](https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81) name.
     * @param string $FileId Media file ID.
FileId or MediaStoragePath must be provided.
     * @param string $MediaStoragePath Storage path of the media.
Only sub-apps in [FileID + Path mode](https://www.tencentcloud.com/document/product/266/126825?from_cn_redirect=1) can initiate tasks through MediaStoragePath.
FileId or MediaStoragePath must be provided.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param integer $TasksPriority Priority of the task flow. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     * @param string $TasksNotifyMode Task flow status change notification mode. Valid values: Finish, Change, and None. If left empty, it represents Finish.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past 7 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
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
        if (array_key_exists("ProcedureName",$param) and $param["ProcedureName"] !== null) {
            $this->ProcedureName = $param["ProcedureName"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
