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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePermissionRanks request structure.
 *
 * @method integer getTableId() Obtain <p>page number</p>
 * @method void setTableId(integer $TableId) Set <p>page number</p>
 * @method string getMode() Obtain <p>Mode</p><p>Enumeration value:</p><ul><li>ALL: All</li><li>Specify: Specify</li><li>TAG: Tag</li></ul><p>Default value: ALL</p>
 * @method void setMode(string $Mode) Set <p>Mode</p><p>Enumeration value:</p><ul><li>ALL: All</li><li>Specify: Specify</li><li>TAG: Tag</li></ul><p>Default value: ALL</p>
 * @method string getRoleType() Obtain <p>Role type</p><p>Enumeration value:</p><ul><li>ROLES: By role</li><li>Others: Other</li></ul><p>Default value: Others</p>
 * @method void setRoleType(string $RoleType) Set <p>Role type</p><p>Enumeration value:</p><ul><li>ROLES: By role</li><li>Others: Other</li></ul><p>Default value: Others</p>
 * @method integer getRoleId() Obtain <p>All page numbers</p>
 * @method void setRoleId(integer $RoleId) Set <p>All page numbers</p>
 * @method string getRulerInfo() Obtain <p>Rule information</p>
 * @method void setRulerInfo(string $RulerInfo) Set <p>Rule information</p>
 * @method string getType() Obtain <p>Type</p><p>Enumeration value:</p><ul><li>ROW: row permission</li><li>COLUMN: column permission</li></ul><p>Default value: ROW</p>
 * @method void setType(string $Type) Set <p>Type</p><p>Enumeration value:</p><ul><li>ROW: row permission</li><li>COLUMN: column permission</li></ul><p>Default value: ROW</p>
 * @method string getOpenStatus() Obtain <p>Enabled status</p><p>Enumeration value:</p><ul><li>Open: Turn on</li><li>Close: Turn off</li></ul><p>Default value: Close</p>
 * @method void setOpenStatus(string $OpenStatus) Set <p>Enabled status</p><p>Enumeration value:</p><ul><li>Open: Turn on</li><li>Close: Turn off</li></ul><p>Default value: Close</p>
 * @method integer getProjectId() Obtain <p>Project ID.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID.</p>
 * @method array getRowColumnConfigList() Obtain <p>Row/column permission configuration</p>
 * @method void setRowColumnConfigList(array $RowColumnConfigList) Set <p>Row/column permission configuration</p>
 */
class CreatePermissionRanksRequest extends AbstractModel
{
    /**
     * @var integer <p>page number</p>
     */
    public $TableId;

    /**
     * @var string <p>Mode</p><p>Enumeration value:</p><ul><li>ALL: All</li><li>Specify: Specify</li><li>TAG: Tag</li></ul><p>Default value: ALL</p>
     */
    public $Mode;

    /**
     * @var string <p>Role type</p><p>Enumeration value:</p><ul><li>ROLES: By role</li><li>Others: Other</li></ul><p>Default value: Others</p>
     */
    public $RoleType;

    /**
     * @var integer <p>All page numbers</p>
     */
    public $RoleId;

    /**
     * @var string <p>Rule information</p>
     */
    public $RulerInfo;

    /**
     * @var string <p>Type</p><p>Enumeration value:</p><ul><li>ROW: row permission</li><li>COLUMN: column permission</li></ul><p>Default value: ROW</p>
     */
    public $Type;

    /**
     * @var string <p>Enabled status</p><p>Enumeration value:</p><ul><li>Open: Turn on</li><li>Close: Turn off</li></ul><p>Default value: Close</p>
     */
    public $OpenStatus;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectId;

    /**
     * @var array <p>Row/column permission configuration</p>
     */
    public $RowColumnConfigList;

    /**
     * @param integer $TableId <p>page number</p>
     * @param string $Mode <p>Mode</p><p>Enumeration value:</p><ul><li>ALL: All</li><li>Specify: Specify</li><li>TAG: Tag</li></ul><p>Default value: ALL</p>
     * @param string $RoleType <p>Role type</p><p>Enumeration value:</p><ul><li>ROLES: By role</li><li>Others: Other</li></ul><p>Default value: Others</p>
     * @param integer $RoleId <p>All page numbers</p>
     * @param string $RulerInfo <p>Rule information</p>
     * @param string $Type <p>Type</p><p>Enumeration value:</p><ul><li>ROW: row permission</li><li>COLUMN: column permission</li></ul><p>Default value: ROW</p>
     * @param string $OpenStatus <p>Enabled status</p><p>Enumeration value:</p><ul><li>Open: Turn on</li><li>Close: Turn off</li></ul><p>Default value: Close</p>
     * @param integer $ProjectId <p>Project ID.</p>
     * @param array $RowColumnConfigList <p>Row/column permission configuration</p>
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RulerInfo",$param) and $param["RulerInfo"] !== null) {
            $this->RulerInfo = $param["RulerInfo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RowColumnConfigList",$param) and $param["RowColumnConfigList"] !== null) {
            $this->RowColumnConfigList = [];
            foreach ($param["RowColumnConfigList"] as $key => $value){
                $obj = new RowColumnConfig();
                $obj->deserialize($value);
                array_push($this->RowColumnConfigList, $obj);
            }
        }
    }
}
