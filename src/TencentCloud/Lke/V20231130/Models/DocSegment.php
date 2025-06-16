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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document fragment.
 *
 * @method string getId() Obtain Fragment ID.
 * @method void setId(string $Id) Set Fragment ID.
 * @method string getBusinessId() Obtain Business ID.
 * @method void setBusinessId(string $BusinessId) Set Business ID.
 * @method string getFileType() Obtain File type (markdown, word, txt).
 * @method void setFileType(string $FileType) Set File type (markdown, word, txt).
 * @method string getSegmentType() Obtain Document segment type (segment, table).
 * @method void setSegmentType(string $SegmentType) Set Document segment type (segment, table).
 * @method string getTitle() Obtain Title.
 * @method void setTitle(string $Title) Set Title.
 * @method string getPageContent() Obtain Paragraph content.
 * @method void setPageContent(string $PageContent) Set Paragraph content.
 * @method string getOrgData() Obtain Original paragraph.
 * @method void setOrgData(string $OrgData) Set Original paragraph.
 * @method string getDocId() Obtain Article ID.
 * @method void setDocId(string $DocId) Set Article ID.
 * @method string getDocBizId() Obtain Document business ID.
 * @method void setDocBizId(string $DocBizId) Set Document business ID.
 * @method string getDocUrl() Obtain Document URL.
 * @method void setDocUrl(string $DocUrl) Set Document URL.
 */
class DocSegment extends AbstractModel
{
    /**
     * @var string Fragment ID.
     */
    public $Id;

    /**
     * @var string Business ID.
     */
    public $BusinessId;

    /**
     * @var string File type (markdown, word, txt).
     */
    public $FileType;

    /**
     * @var string Document segment type (segment, table).
     */
    public $SegmentType;

    /**
     * @var string Title.
     */
    public $Title;

    /**
     * @var string Paragraph content.
     */
    public $PageContent;

    /**
     * @var string Original paragraph.
     */
    public $OrgData;

    /**
     * @var string Article ID.
     */
    public $DocId;

    /**
     * @var string Document business ID.
     */
    public $DocBizId;

    /**
     * @var string Document URL.
     */
    public $DocUrl;

    /**
     * @param string $Id Fragment ID.
     * @param string $BusinessId Business ID.
     * @param string $FileType File type (markdown, word, txt).
     * @param string $SegmentType Document segment type (segment, table).
     * @param string $Title Title.
     * @param string $PageContent Paragraph content.
     * @param string $OrgData Original paragraph.
     * @param string $DocId Article ID.
     * @param string $DocBizId Document business ID.
     * @param string $DocUrl Document URL.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("PageContent",$param) and $param["PageContent"] !== null) {
            $this->PageContent = $param["PageContent"];
        }

        if (array_key_exists("OrgData",$param) and $param["OrgData"] !== null) {
            $this->OrgData = $param["OrgData"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("DocUrl",$param) and $param["DocUrl"] !== null) {
            $this->DocUrl = $param["DocUrl"];
        }
    }
}
