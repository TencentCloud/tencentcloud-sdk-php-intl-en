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
 * DescribeFileAttributes request structure.
 *
 * @method string getFileId() Obtain media file ID
 * @method void setFileId(string $FileId) Set media file ID
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate on-demand services after December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate on-demand services after December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purpose.
 */
class DescribeFileAttributesRequest extends AbstractModel
{
    /**
     * @var string media file ID
     */
    public $FileId;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate on-demand services after December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purpose.
     */
    public $ExtInfo;

    /**
     * @param string $FileId media file ID
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate on-demand services after December 25, 2023, they must fill this field with the application ID when accessing resources in on-demand applications (whether it's the default application or a newly created application).</b>
     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purpose.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
