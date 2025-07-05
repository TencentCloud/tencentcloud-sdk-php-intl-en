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
 * SplitMedia request structure.
 *
 * @method string getFileId() Obtain The video ID.
 * @method void setFileId(string $FileId) Set The video ID.
 * @method array getSegments() Obtain Video splitting task information list, supporting up to 100 splitting messages at the same time.
 * @method void setSegments(array $Segments) Set Video splitting task information list, supporting up to 100 splitting messages at the same time.
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getSessionContext() Obtain Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the SplitMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the SplitMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
 * @method string getSessionId() Obtain The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method void setSessionId(string $SessionId) Set The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method integer getTasksPriority() Obtain The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
 * @method void setTasksPriority(integer $TasksPriority) Set The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
 */
class SplitMediaRequest extends AbstractModel
{
    /**
     * @var string The video ID.
     */
    public $FileId;

    /**
     * @var array Video splitting task information list, supporting up to 100 splitting messages at the same time.
     */
    public $Segments;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the SplitMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
     */
    public $SessionContext;

    /**
     * @var string The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     */
    public $SessionId;

    /**
     * @var integer The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
     */
    public $TasksPriority;

    /**
     * @param string $FileId The video ID.
     * @param array $Segments Video splitting task information list, supporting up to 100 splitting messages at the same time.
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $SessionContext Identifies the source context, which is used to transparently transmit user request information. This field value will be returned in the SplitMediaComplete callback and task flow status change callback, with a maximum length of 1000 characters.
     * @param string $SessionId The identification code used for task deduplication. If there is a request with the same identification code within three days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     * @param integer $TasksPriority The priority of the task. The larger the value, the higher the priority. The value range is -10 to 10. If left blank, it means 0.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Segments",$param) and $param["Segments"] !== null) {
            $this->Segments = [];
            foreach ($param["Segments"] as $key => $value){
                $obj = new SplitMediaTaskConfig();
                $obj->deserialize($value);
                array_push($this->Segments, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
